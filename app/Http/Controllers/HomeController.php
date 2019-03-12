<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\{
    Student,
    Folder,
    SchoolFee
};

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $student = $user !== NULL ? Student::where('user_id', $user->id)->first() : NULL;
        $schoolFee = $student !== NULL ? SchoolFee::where('student_id', $student->id)->first() : NULL;
        $folder = $student !== NULL ? Folder::where('student_id', $student->id)->first() : NULL;
        if ($user->step === 1)
            return view('home', compact('user'));
        elseif ($user->step === 2)
            return view('home', compact('user', 'student'));
        elseif ($user->step === 3)
            return view('home', compact('user', 'student', 'folder'));
        elseif ($user->step === 4)
            return view('home', compact('user', 'student', 'folder', 'schoolFee'));
    }

    /**
     * Holds an user registration pursuit.
     *
     * @param   mixed $step
     * @return \Illuminate\Http\Response
     */
    public function pursuitRegistration($step)
    {
        switch ($step) {
            case '1':
                return redirect()->route('student.create');
                break;

            case '2':
                return redirect()->route('folder.create');
                break;
            case '3':
                return redirect()->route('admission.create');
                break;
        }
    }
}
