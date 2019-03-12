<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\SchoolRequest;
use App\Management\PictureManagement;
use App\Repositories\SchoolRepository;

class SchoolController extends Controller
{
    protected $pagination = 5, $schoolRepository;

    public function __construct(SchoolRepository $schoolRepository)
    {
      $this->middleware('auth');
      $this->middleware('admin', ['except' => ['index', 'show']]);

      $this->schoolRepository = $schoolRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = $this->schoolRepository->getPaginate($this->pagination);
        $links = $schools->render();

        return view('schools.index', compact('schools', 'links'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schools.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\SchoolRequest  $request
     * @param  App\Management\PictureManagement $pictureManager
     * @return \Illuminate\Http\Response
     */
    public function store(SchoolRequest $request, PictureManagement $pictureManager)
    {
        $data = $request->except('avatar');
        $path = $pictureManager->savePicture($request->file('avatar'), config('folders.school_pictures_folder'));
        
        if(!$path)
            $this->schoolRepository->store($data);
        else {
            $data = array_merge($data, ['avatar' => $path]);
            $this->schoolRepository->store($data);
        }

        return redirect()->route('school.index')->with(['success' => 'L\'entité '.$request->name.' a été ajoutée avec succès !']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $school = $this->schoolRepository->getById($id);
        $school_trainings = $school->trainings()->paginate($this->pagination);
        $links = $school_trainings->render();

        return view('schools.show', compact('school', 'school_trainings', 'links'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $school = $this->schoolRepository->getById($id);

        return view('schools.edit', compact('school'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\SchoolRequest  $request
     * @param  App\Management\PictureManagement $pictureManager
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SchoolRequest $request, $id, PictureManagement $pictureManager)
    {
        $school = $this->schoolRepository->getById($id);
        $data = $request->except('avatar');
        $path = $pictureManager->updatePicture($school->avatar, $request->file('avatar'), config('folders.school_pictures_folder'));
        if(!$path)
            $this->schoolRepository->update($id, $data);
        else {
            $data = array_merge($data, ['avatar' => $path]);
            $this->schoolRepository->update($id, $data);
        }

        return redirect()->route('school.index')->with(['success' => 'Mise à jour effectuée avec succès !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->schoolRepository->destroy($id);

        return back();
    }
}
