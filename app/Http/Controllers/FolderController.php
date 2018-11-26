<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\FolderUpdateRequest;
use App\Http\Requests\DecisionOnFolderRequest;

use App\Repositories\FolderRepository;

class FolderController extends Controller
{
    protected $folderRepository;

    protected $pagination = 10;

    public function __construct(FolderRepository $folderRepository)
    {
      $this->middleware('auth');
      $this->middleware('admin', ['only' => ['index', 'delete']]);
      $this->middleware('ajax', ['only' => ['accept', 'reject']]);
      $this->folderRepository = $folderRepository;
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FolderUpdateRequest $request, $id)
    {
        $this->folderRepository->update($id, $request->allFiles());

        return redirect(route($this->folderRepository->updateRedirectRoute($request, 'folder.index')));
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


    public function acceptByStaffLevelTwo($id)
    {
      $this->folderRepository->updateByStaff($id, 2, 'accept');
      return back();
    }

    public function rejectByStaffLevelTwo($id)
    {
      $this->folderRepository->updateByStaff($id, 2, 'reject');
      return back();
    }

    public function acceptByStaffLevelThree($id)
    {
      $this->folderRepository->updateByStaff($id, 3, 'accept');
      return back();
    }

    public function rejectByStaffLevelThree($id)
    {
      $this->folderRepository->updateByStaff($id, 3, 'reject');
      return back();
    }
}
