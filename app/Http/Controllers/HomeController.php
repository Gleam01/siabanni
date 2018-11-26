<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Student;
use App\Models\Folder;

class HomeController extends Controller
{
    protected $studentRepository, $folderRepository;
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
      if ($user !== NULL)
        $student = Student::where('user_id', $user->id)->get()->first();
      if ($student !== NULL)
        $folder = Folder::where('student_id', $student->id)->get()->first();
      if ($user->step === 1)
        return view('home', compact('user'));
      elseif ($user->step === 2)
        return view('home', compact('user', 'student'));
      elseif ($user->step === 3)
        return view('home', compact('user', 'student', 'folder'));
    }
}
