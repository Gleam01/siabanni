<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\{
    FolderCreateRequest,
    FolderUpdateRequest,
    DecisionOnFolderRequest
};

use App\Management\PictureManagementInterface;

use App\Repositories\{
    FolderRepository,
    StudentRepository,
    UserRepository
};

use Illuminate\Support\Facades\Mail;

use App\Mail\FolderAccepted;

use App\Models\{
    User,
    Student
};

class FolderController extends Controller
{
    protected $folderRepository,
        $studentRepository,
        $userRepository;


    protected $pagination = 10;

    public function __construct(
        FolderRepository $folderRepository,
        StudentRepository $studentRepository,
        UserRepository $userRepository
    ) {
        $this->middleware('auth');
        $this->middleware('admin', ['only' => ['index', 'delete']]);
        $this->folderRepository = $folderRepository;
        $this->studentRepository = $studentRepository;
        $this->userRepository = $userRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $folders = $this->folderRepository->getWithStudentPaginate($this->pagination);
        $links = $folders->render();

        return view('back-end.folders.index', compact('folders', 'links'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $folder = $this->folderRepository->getById($id);

        return view('folders.show', compact('folder'));
    }

    /**
     * Show the form for creating the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student_id = $this->studentRepository->getStudentByUserId(auth()->user()->id)->id;
        return view('folders.create', compact('student_id'));
    }

    /**
     * Create a new resource in storage.
     *
     * @param  \App\Http\Requests\FolderCreateRequest  $request
     * @param  \App\Management\PictureManagementInterface $manager
     * @return \Illuminate\Http\Response
     */
    public function store(FolderCreateRequest $request, PictureManagementInterface $manager)
    {
        $user_id = auth()->user()->id;
        $student = $this->studentRepository->getStudentByUserId($user_id);
        $student_folder = array(
            'id' => $student->id,
            'firstName' => $student->firstName,
            'lastName' => $student->lastName
        );

        if (($paths=$manager->save($student_folder, $request->allFiles()))!==false)
        {
            $paths = array_merge($paths, ['student_id' => $student->id]);
            $this->folderRepository->store($paths);
            $this->userRepository->update($user_id, ['step' => 3]);
            return redirect()->route('admission.create');
        }

        else {
            session()->put('image_error', 'Images invalides !');
            return redirect()->route('folder.create')->withInput();
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $folder = $this->folderRepository->getById($id);

      return view('folders.edit', compact('folder'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\FolderUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FolderUpdateRequest $request, $id)
    {
        $this->folderRepository->update($id, $request->allFiles());

        return redirect()->route('admission.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->folderRepository->delete($id);

        return back();
    }

    private function sendMail($folder_id)
    {
        $user = $this->folderRepository->getgetUserByFolderId($folder_id);
        $student = $this->folderRepository->getStudentByFolderId($folder_id);
        Mail::to($user->email)->send(new FolderAccepted($user, $student));
    }

    public function acceptByStaffLevelOne($id)
    {
      $result = $this->folderRepository->updateByStaff($id, 1, 'accept');
      if ($result['validateByAllStaff']) 
        $this->sendMail($id);
      return back();
    }

    public function rejectByStaffLevelOne($id)
    {
      $this->folderRepository->updateByStaff($id, 1, 'reject');
      return back();
    }

    public function acceptByStaffLevelTwo($id)
    {
      $result = $this->folderRepository->updateByStaff($id, 2, 'accept');
      if ($result['validateByAllStaff']) 
        $this->sendMail($id);
      return back();
    }

    public function rejectByStaffLevelTwo($id)
    {
      $this->folderRepository->updateByStaff($id, 2, 'reject');
      return back();
    }
}
