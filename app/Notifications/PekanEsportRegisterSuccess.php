<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PekanEsportRegisterSuccess extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        // return (new MailMessage)
        //     ->greeting('Hai ' . $notifiable->player_name[0])
        //     ->line('Terima kasih telah mendaftar di Pekan Esport Vol. 2')
        //     // ->action('Notification Action', url('/'))
        //     ->line('Berikut rangkuman data yang kami terima :');

        return (new MailMessage)
            ->subject('Pendaftaran Pekan Esport Vol. 2')
            ->markdown('mail.pekanesport.registration', ['notifiable' => $notifiable]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
