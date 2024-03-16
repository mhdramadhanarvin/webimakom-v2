<?php

namespace App\Notifications;

use App\Enums\PekanEsportStatusEnum;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PekanEsportRegisterNotification extends Notification
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
        switch ($notifiable->status) {
            case PekanEsportStatusEnum::WAITING_CONFIRMATION:
                $subject = 'Pendaftaran Pekan Esport Vol. 2';
                $markdownFile = 'mail.pekanesport.registration';
                break;
            case PekanEsportStatusEnum::APPROVED:
                $subject = 'Lolos Verifikasi Pendaftaran Pekan Esport Vol. 2';
                $markdownFile = 'mail.pekanesport.approved';
                break;
            case PekanEsportStatusEnum::REJECTED:
                $subject = 'Tidak Lolos Verifikasi Pendaftaran Pekan Esport Vol. 2';
                $markdownFile = 'mail.pekanesport.rejected';
                break;
        }
        return (new MailMessage)
            ->subject($subject)
            ->markdown($markdownFile, ['notifiable' => $notifiable]);
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
