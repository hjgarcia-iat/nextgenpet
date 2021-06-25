<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TeacherRegistered extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var User
     */
    private $teacher;

    /**
     * Create a new message instance.
     *
     * @param User $teacher
     */
    public function __construct(User $teacher)
    {
        //
        $this->teacher = $teacher;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.teacher-registered')
            ->subject('Next GEN PET Registration')
            ->with([
                'name' => $this->teacher->name,
                'email' => $this->teacher->email,
            ]);
    }
}
