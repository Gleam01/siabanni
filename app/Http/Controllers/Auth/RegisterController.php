<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

use App\Repositories\UserRepository;
use App\Repositories\StudentRepository;
use App\Repositories\FolderRepository;
use App\Repositories\StaffRepository;
use App\Repositories\TrainingRepository;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\StudentRequest;
use App\Http\Requests\FolderRequest;
use App\Http\Requests\StaffRequest;
use App\Http\Requests\TrainingChoosingRequest;

use App\Management\PictureManagementInterface;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    protected $userRepository, $studentRepository,
              $folderRepository, $staffRepository,
              $trainingRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
      UserRepository $userRepository,
      StudentRepository $studentRepository,
      FolderRepository $folderRepository,
      StaffRepository $staffRepository,
      TrainingRepository $trainingRepository
    )
    {
        $this->middleware('guest', ['only' => ['showRegistrationForm', 'register']]);
        $this->userRepository = $userRepository;
        $this->studentRepository = $studentRepository;
        $this->folderRepository = $folderRepository;
        $this->staffRepository = $staffRepository;
        $this->trainingRepository = $trainingRepository;
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
    */
   public function showRegistrationForm ()
   {
     $trainings = $this->trainingRepository->getTrainings();

     return view('auth.register', compact('trainings'));
   }
   /**
    * Holds an user registration pursuit.
    *
    * @return \Illuminate\Http\Response
   */
  public function pursuitRegistration(Request $request, $step)
  {
    switch ($step) {
      case '1':
        $request->session()->put('user_id', auth()->user()->id);
        auth()->guard()->logout();
        return redirect()->route('register.training-choosing');
      break;

      case '2':
        $student = $this->studentRepository->getUserByStudentId(auth()->user()->id);
        session([
           'student_id' => $student->id,
           'student_lastName' => $student->lastName,
           'student_firstName' => $student->firstName
        ]);
        auth()->guard()->logout();
        return redirect()->route('register.step-three');
      break;
    }
  }

   /**
    * Show the application registration step 2 form.
    *
    * @return \Illuminate\Http\Response
    */
   public function showRegistrationStepTwoForm()
   {
     return view('auth.register-step-two');
   }

   /**
    * Show the application registration step 3 form.
    *
    * @return \Illuminate\Http\Response
    */
   public function showRegistrationStepThreeForm()
   {
     return view('auth.register-step-three');
   }

   /**
    * Show the application registration training choosing form.
    *
    * @return \Illuminate\Http\Response
    */
   public function showRegistrationTrainingChoosingForm()
   {
     $trainings = $this->trainingRepository->getTrainings();
     return view('auth.register-training-choosing', compact('trainings'));
   }

   /**
    * Handle a registration request for the application.
    *
    * @param  \Illuminate\Http\UserCreateRequest  $request
    * @return \Illuminate\Http\Response
    */
   public function register(UserCreateRequest $request)
   {
     $request->merge(['step' => 1]);
     $user = $this->userRepository->store($request->all());

     $request->session()->put('user_id', $user->id);
     $request->session()->put('training_id', $request->input('training_id'));
     $request->session()->put('cycle', $request->input('cycle'));
     return redirect()->route('register.step-two');
   }

   /**
    * Handle a training choosing registration request for the application.
    *
    * @param  \Illuminate\Http\TrainingChoosingRequest  $request
    * @return \Illuminate\Http\Response
    */
   public function registerTrainingChoosing(TrainingChoosingRequest $request)
   {
     $request->session()->put('user_id', $request->input('user_id'));
     $request->session()->put('training_id', $request->input('training_id'));
     $request->session()->put('cycle', $request->input('cycle'));
     return redirect()->route('register.step-two');
   }

   /**
    * Handle a registration request for the application.
    *
    * @param  \Illuminate\Http\StudentRequest  $request
    * @return \Illuminate\Http\Response
    */
   public function registerStepTwo(StudentRequest $request)
   {
      $student = $this->studentRepository->store($request->except(['training_id', 'cycle']));

      DB::table('student_training')->insert([
         'student_id' => $student->id,
         'training_id' => $request->input('training_id'),
         'dateOfRegistration' => null,
         'semester'=> null,
         'cycle' => $request->input('cycle')
      ]);

      $user = $this->userRepository->getById($student->user_id);
      $user->step = 2;
      $user->save();

      session([
         'student_id' => $student->id,
         'student_lastName' => $student->lastName,
         'student_firstName' => $student->firstName
      ]);

      return redirect()->route('register.step-three');
   }

   /**
    * Handle a registration request for the application.
    *
    * @param  \Illuminate\Http\FolderRequest  $request
    *@param   App\Management\PictureManagementInterface $manager
    * @return \Illuminate\Http\Response
    */
   public function registerStepThree(FolderRequest $request, PictureManagementInterface $manager)
   {
      $student = array(
       'id' => $request->input('student_id'),
       'firstName' => $request->input('student_firstName'),
       'lastName' => $request->input('student_lastName')
     );

     if (($paths=$manager->save($student, $request->allFiles()))!==false)
     {
       $paths = array_merge($paths, ['student_id' => $request->input('student_id')]);
       $folder = $this->folderRepository->store($paths);
       $user = $this->userRepository->getById($this->studentRepository->getById($folder->student_id)->user_id);
       $user->step = 3;
       $user->save();
       return redirect($this->redirectPath());
     }

     else {
       session()->put('image_error', 'Images invalides !');
       return redirect('registerstep3')->withInput();
     }
   }

   /**
    * Handle a registration request for the application.
    *
    * @param  \Illuminate\Http\StaffRequest  $request
    * @return \Illuminate\Http\Response
    */
   public function registerStaff(StaffRequest $request)
   {
     $password = str_random(8);
     $user = $this->userRepository->store(array(
      'login' => $request->input('login'),
      'email' => $request->input('email'),
      'password' => $password,
      'admin' => true,
      'step' => NULL,
      'rank' => $request->input('rank'),
     ));

     $this->staffRepository->store(
       array(
         'lastName' => $request->input('lastName'),
         'firstName' => $request->input('firstName'),
         'phone' => $request->input('phone'),
         'office' => $request->input('office'),
         'school_id' => $request->input('school_id'),
         'user_id' => $user->id,
       )
     );

     return response()->json([
       'status' => 'Successfully add staff ! Server returned code : 200',
       'password' => 'Staff password : '.$password
     ]);
   }

    public function redirectPath()
    {
       return $this->redirectTo;
    }
}
