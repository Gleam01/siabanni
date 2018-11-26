<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StudentUpdateRequest;
use App\Http\Requests\StudentStatusRequest;

use App\Repositories\StudentRepository;

class StudentController extends Controller
{
    protected $studentRepository;

    protected $pagination = 10;

    public function __construct(StudentRepository $studentRepository)
    {
      $this->middleware('auth');
      $this->middleware('admin', ['only' => ['index', 'delete']]);

      $this->studentRepository = $studentRepository;
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $student = $this->studentRepository->getById($id);

      return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentUpdateRequest $request, $id)
    {
        $this->studentRepository->update($id, $request->all());

        return redirect(route($this->studentRepository->updateRedirectRoute($request, 'student.index')));
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
