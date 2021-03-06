<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class HelpEmail
 * @package App\Mail
 */
class HelpEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var Request
     */
    public $request;

    /**
     * Create a new message instance.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->request->get('email'))
            ->subject('Next Gen PET Help Form')
            ->view('mail.help')
            ->with([
                'name' => $this->request->get('name'),
                'email' => $this->request->get('email'),
                'subject' => $this->request->get('subject'),
                'comment' => $this->request->get('comment'),
            ]);
    }
}
