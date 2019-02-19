<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Stripe;

use App\Repositories\{
    SchoolFeeRepository,
    TrainingRepository
};

use Illuminate\Support\Facades\DB;

class AdmissionPaymentController extends Controller
{
    protected $schoolFeeRepository, $trainingRepository;

    public function __construct(SchoolFeeRepository $schoolFeeRepository, TrainingRepository $trainingRepository)
    {
        $this->middleware('auth');
        $this->schoolFeeRepository = $schoolFeeRepository;
        $this->trainingRepository = $trainingRepository;
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $training = $this->trainingRepository->getTrainingByUserId(auth()->user()->id);
        return view('admission.create', compact('training'));
    }

    /**
     * success response method.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        $training = $this->trainingRepository->getTrainingByUserId($user->id);
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $request->amount,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Admission fees payment for ".$training->name." by student ".$user->email 
        ]);

        $this->schoolFeeRepository->store([
            'pay' => $request->amount,
            'letToPay' => 0.00,
            'type' => 'Admission',
            'student_id' => $this->schoolFeeRepository->getStudentIDByUserID(auth()->user()->id)
        ]);

        return redirect()->route('dashboard')->with('success', 'Paiement effectué avec succès ! Votre inscription a été bien achevé !');
    } 
}
