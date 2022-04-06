<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class DataChangeEmailNotification extends Notification
{
    use Queueable;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return $this->getMessage();
    }

    public function getMessage()
    {
        return (new MailMessage())
            ->subject(config('app.name') . ': Entry ' . $this->data['action'] . ' in ' . $this->data['model_name'])
            ->greeting('Hi,')
            ->line('Kami mengonfirmasikan kepada anda bahwa entri baru telah dibuat di ' . $this->data['model_name'])
            ->line('Silahkan login untuk melihat informasinya.')
            ->action(config('app.name'), config('app.url'))
            ->line('Terimakasih')
            ->line(config('app.name') . ' Team')
            ->salutation(' ');
    }
}