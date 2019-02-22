<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\OptionRequest;
use App\Management\PictureManagement;
use App\Repositories\{
    OptionRepository,
    TrainingRepository
};

class OptionController extends Controller
{
    protected $pagination = 5, $optionRepository, $trainingRepository;

    public function __construct(OptionRepository $optionRepository, TrainingRepository $trainingRepository)
    {
      $this->middleware('auth');
      $this->middleware('admin', ['except' => ['index', 'show']]);

      $this->optionRepository = $optionRepository;
      $this->trainingRepository = $trainingRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $options = $this->optionRepository->getPaginate($this->pagination);
        $links = $options->render();

        return view('options.index', compact('options', 'links'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trainings = $this->trainingRepository->getAll();
        return view('options.create', compact('trainings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\OptionRequest  $request
     * @param  App\Management\PictureManagement $pictureManager
     * @return \Illuminate\Http\Response
     */
    public function store(OptionRequest $request, PictureManagement $pictureManager)
    {
        $data = $request->except('avatar');
        $path = $pictureManager->savePicture($request->file('avatar'), config('folders.option_pictures_folder'));
        
        if(!$path)
            $this->optionRepository->store($data);
        else {
            $data = array_merge($data, ['avatar' => $path]);
            $this->optionRepository->store($data);
        }

        return redirect()->route('option.index')->with(['success' => 'L\'option '.$request->name.' a été ajoutée avec succès !']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $option = $this->optionRepository->getById($id);

        return view('options.show', compact('option'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $option = $this->optionRepository->getById($id);
        $trainings = $this->trainingRepository->getAll();

        return view('options.edit', compact('option', 'trainings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\OptionRequest  $request
     * @param  App\Management\PictureManagement $pictureManager
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OptionRequest $request, $id, PictureManagement $pictureManager)
    {
        $option = $this->optionRepository->getById($id);
        $data = $request->except('avatar');
        $path = $pictureManager->updatePicture($option->avatar, $request->file('avatar'), config('folders.option_pictures_folder'));
        if(!$path)
            $this->optionRepository->update($id, $data);
        else {
            $data = array_merge($data, ['avatar' => $path]);
            $this->optionRepository->update($id, $data);
        }

        return redirect()->route('option.index')->with(['success' => 'Mise à jour effectuée avec succès !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->optionRepository->destroy($id);

        return back();
    }
}
