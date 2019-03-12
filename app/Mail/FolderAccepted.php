<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Models\ {
    User,
    Student
};

class FolderAccepted extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The user instance.
     *
     * @var User
     */
    protected $user;

    /**
     * The student instance.
     *
     * @var Student
    */
    protected $student;

    /**
     * Create a new message instance.
     *
     * @return void
    */
    public function __construct(User $user, Student $student)
    {
        $this->user = $user;
        $this->student = $student;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Folder acceptation notification')->view('emails.folders.accepted')
                        ->with([
                            'student' => $this->student,
                            'user' => $this->user,
                        ]);
    }
}
