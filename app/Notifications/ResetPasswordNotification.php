<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResetPasswordNotification extends Notification
{
    use Queueable;

    public $token;
    /**
     * Create a new notification instance.
    */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable)
    {
        $url = url("/reset-password/{$this->token}?email={$notifiable->email}");

        return (new MailMessage)
            ->subject('Recuperación de contraseña – Sistema SiGE')
            ->greeting('Hola!')
            ->line('Recibimos una solicitud para restablecer tu contraseña del Sistema SiGE.')
            ->line('Si vos no solicitaste este cambio, podés ignorar este mensaje.')
            ->action('Restablecer contraseña', $url)
            ->line('Gracias por usar el Sistema SiGE.');
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
