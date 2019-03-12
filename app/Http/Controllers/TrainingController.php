<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\TrainingRequest;
use App\Management\PictureManagement;
use App\Repositories\{
    TrainingRepository,
    SchoolRepository
};

class TrainingController extends Controller
{
    protected $pagination = 5, $trainingRepository, $schoolRepository;

    public function __construct(TrainingRepository $trainingRepository, SchoolRepository $schoolRepository)
    {
      $this->middleware('auth');
      $this->middleware('admin', ['except' => ['index', 'show']]);

      $this->trainingRepository = $trainingRepository;
      $this->schoolRepository = $schoolRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainings = $this->trainingRepository->getPaginate($this->pagination);
        $links = $trainings->render();

        return view('trainings.index', compact('trainings', 'links'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schools = $this->schoolRepository->getAll();
        return view('trainings.create', compact('schools'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\TrainingRequest  $request
     * @param  App\Management\PictureManagement $pictureManager
     * @return \Illuminate\Http\Response
     */
    public function store(TrainingRequest $request, PictureManagement $pictureManager)
    {
        $data = $request->except('avatar');
        $path = $pictureManager->savePicture($request->file('avatar'), config('folders.training_pictures_folder'));
        
        if(!$path)
            $this->trainingRepository->store($data);
        else {
            $data = array_merge($data, ['avatar' => $path]);
            $this->trainingRepository->store($data);
        }

        return redirect()->route('training.index')->with(['success' => 'La filière '.$request->name.' a été ajoutée avec succès !']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $training = $this->trainingRepository->getById($id);
        $training_options = $training->options()->paginate($this->pagination);
        $links = $training_options->render();

        return view('trainings.show', compact('training', 'training_options', 'links'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $training = $this->trainingRepository->getById($id);
        $schools = $this->schoolRepository->getAll();

        return view('trainings.edit', compact('training', 'schools'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\TrainingRequest  $request
     * @param  App\Management\PictureManagement $pictureManager
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TrainingRequest $request, $id, PictureManagement $pictureManager)
    {
        $training = $this->trainingRepository->getById($id);
        $data = $request->except('avatar');
        $path = $pictureManager->updatePicture($training->avatar, $request->file('avatar'), config('folders.training_pictures_folder'));
        if(!$path)
            $this->trainingRepository->update($id, $data);
        else {
            $data = array_merge($data, ['avatar' => $path]);
            $this->trainingRepository->update($id, $data);
        }

        return redirect()->route('training.index')->with(['success' => 'Mise à jour effectuée avec succès !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->trainingRepository->destroy($id);

        return back();
    }
}
