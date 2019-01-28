<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PlanRepository;
use App\Models\Plan;
use App\Repositories\FolderRepository;

class PlanController extends Controller
{
    protected $planRepository;


    protected $pagination = 10;

    public function __construct(PlanRepository $planRepository) {
        $this->middleware('auth');
        $this->planRepository = $planRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = $this->planRepository->getWithTrainingPaginate($this->pagination);
        $links = $plans->render();

        return view('plans.index', compact('plans', 'links'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plan $plan
     * @param  \App\Repositories\FolderRepository $folderRepository
     * @return \Illuminate\Http\Response
     */

    public function show(Plan $plan, FolderRepository $folderRepository)
    {
        $folder = $folderRepository->getFolderByUserId(auth()->user()->id)->id;
        return view('plans.show', compact('plan', 'folder'));
    }
}
