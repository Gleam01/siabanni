<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PlanRepository;
use App\Repositories\SchoolFeeRepository;

class SubscriptionController extends Controller
{
    protected $planRepository, $schoolFeeRepository;


    public function __construct(PlanRepository $planRepository, SchoolFeeRepository $schoolFeeRepository)
    {
        $this->middleware('auth');
        $this->planRepository = $planRepository;
        $this->schoolFeeRepository = $schoolFeeRepository;
    }

    public function create(Request $request)
    {
        $plan = $this->planRepository->getById($request->input('plan'));

        $request->user()
            ->newSubscription('main', $plan->stripe_plan)
            ->create($request->stripeToken);

        $this->schoolFeeRepository->store([
            'pay' => $plan->cost,
            'letToPay' => 0.00,
            'type' => 'Admission',
            'student_id' => $this->schoolFeeRepository->getStudentIDByUserID(auth()->user()->id)
        ]);

        return redirect()->route('home')->with('success', 'Inscription terminée avec succès !');
    }
}
