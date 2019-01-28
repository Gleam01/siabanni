<?php

namespace App\Http\Controllers;

use App\Http\Requests\{
    StudentCreateRequest,
    StudentUpdateRequest,
    StudentStatusRequest
};

use App\Repositories\{
    StudentRepository,
    TrainingRepository,
    UserRepository
};

use Illuminate\{
  Support\Facades\DB
};

class StudentController extends Controller
{
    protected $studentRepository,
        $userRepository,
        $trainingRepository;

    protected $pagination = 10;

    public function __construct(
        StudentRepository $studentRepository,
        UserRepository $userRepository,
        TrainingRepository $trainingRepository
    )
    {
      $this->middleware('auth');
      $this->middleware('admin', ['only' => ['index', 'delete']]);

      $this->studentRepository = $studentRepository;
      $this->userRepository = $userRepository;
      $this->trainingRepository = $trainingRepository;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = $this->studentRepository->getWithUserFolderAndTrainingsPaginate($this->pagination);
        $links = $students->render();

        return view('back-end.students.index', compact('students', 'links'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = $this->studentRepository->getById($id);

        return view('students.show', compact('student'));
    }

    /**
     * Show the form for creating the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trainings = $this->trainingRepository->getTrainings();

        return view('students.create', compact('trainings'));
    }

    /**
     * Create the specified resource in storage.
     *
     * @param  \App\Http\Requests\StudentCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentCreateRequest $request)
    {
        $user_id = auth()->user()->id;
        $request->merge(['user_id' => $user_id]);

        $student = $this->studentRepository->store($request->except(['training_id', 'cycle']));

        DB::table('student_training')->insert([
            'student_id' => $student->id,
            'training_id' => $request->input('training_id'),
            'dateOfRegistration' => null,
            'semester'=> null,
            'cycle' => $request->input('cycle')
        ]);

        $this->userRepository->update($user_id, ['step' => 2]);

        return redirect()->route('folder.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $student = $this->studentRepository->getById($id);
      $trainings = $this->trainingRepository->getTrainings();

      return view('students.edit', compact('student', 'trainings'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StudentUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentUpdateRequest $request, $id)
    {
        $this->studentRepository->update($id, $request->except(['training_id', 'cycle']));

        DB::table('student_training') ->where(
            'student_id', $this->studentRepository->getStudentByUserId(auth()->user()->id)->id
        )->update([
            'training_id' => $request->input('training_id'),
            'cycle' => $request->input('cycle')
        ]);

        return redirect()->route('folder.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->studentRepository->delete($id);

        return back();
    }

    public function updateStatus(StudentStatusRequest $request)
    {
      $this->studentRepository->updateStatus($request->input('id'), $request->input('status'));
      return response()->json();
    }
}
