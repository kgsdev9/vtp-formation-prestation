<?php

// app/Notifications/AccountConfirmation.php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Lang;
use Illuminate\Auth\Notifications\VerifyEmail;

class AccountConfirmation extends Notification
{
    use Queueable;

    protected $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Send the email notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $url = URL::temporarySignedRoute(
            'verification.verify', now()->addMinutes(60), ['id' => $notifiable->id, 'hash' => sha1($this->token)]
        );

        return (new MailMessage)
                    ->subject('Confirmez votre adresse e-mail')
                    ->line('Merci de vous être inscrit sur notre site.')
                    ->line('Cliquez sur le lien ci-dessous pour confirmer votre compte :')
                    ->action('Confirmer mon compte', $url)
                    ->line('Ce lien expirera dans 60 minutes.')
                    ->line('Si vous n\'avez pas créé de compte, aucune action n\'est requise.');
    }
}
