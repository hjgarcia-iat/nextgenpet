<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OnlineLearning extends Mailable
{
    use Queueable, SerializesModels;
	/**
	 * @var Request
	 */
	private $request;

	/**
	 * Create a new message instance.
	 *
	 * @param Request $request
	 */
    public function __construct(Request $request)
    {
        //
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
	                ->subject('NextGen PET Online Learning')
	                ->view('mail.online-learning')
	                ->with([
		                'name'    => $this->request->get('name'),
		                'email'   => $this->request->get('email'),
		                'comment' => $this->request->get('comment'),
	                ]);
    }
}
