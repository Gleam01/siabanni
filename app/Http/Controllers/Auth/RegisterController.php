<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;

use App\Repositories\UserRepository;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\StaffRequest;

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

    protected $userRepository;

    /**
     * Create a new controller instance.
     *
     * @param \App\Repositories\UserRepository $userRepository
     * @return void
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->middleware('guest');
        $this->userRepository = $userRepository;
    }

   /**
    * Handle a registration request for the application.
    *
    * @param  \App\Http\Requests\UserCreateRequest  $request
    * @return \Illuminate\Http\Response
    */
   public function register(UserCreateRequest $request)
   {
     $request->merge(['step' => 1]);
     $user = $this->userRepository->store($request->all());

     event(new Registered($user));

     $this->guard()->login($user);

     return $this->registered($request, $user)
                     ?: redirect($this->redirectPath());
   }

   /**
    * Handle a registration request for the application.
    *
    * @param  \App\Http\Requests\StaffRequest  $request
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
