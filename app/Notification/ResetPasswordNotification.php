<?php

namespace App\Notification;

use App\Models\User;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResetPasswordNotification extends Notification
{
    /**
     * The password reset token.
     *
     * @var string
     */
    public $token;
    /**
     * @var User
     */
    private $user;

    /**
     * Create a notification instance.
     *
     * @param User $user
     * @param  string $token
     */
    public function __construct(User $user, $token)
    {
        $this->token = $token;
        $this->user  = $user;
    }

    /**
     * Get the notification's channels.
     *
     * @param  mixed $notifiable
     * @return array|string
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('You are receiving this email because we received a password reset request for your account.')
            ->action('Reset Password', url(config('app.url') . route('recover.password.edit', [$this->user->email, $this->token], false)))
            ->line('If you did not request a password reset, no further action is required.');
    }
}
