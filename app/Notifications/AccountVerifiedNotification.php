<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AccountVerifiedNotification extends Notification
{
    use Queueable;

    public function __construct()
    {
        //
    }

    public function via($notifiable)
    {
        // Envoie via email, mais tu peux ajouter d'autres canaux si nécessaire
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Votre compte a été vérifié')
            ->greeting('Bonjour ' . $notifiable->name)
            ->line('Votre compte a bien été vérifié.')
            ->action('Accéder à votre compte', url('/'))
            ->line('Merci d\'utiliser notre application !');
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}

