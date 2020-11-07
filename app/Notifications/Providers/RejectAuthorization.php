<?php

namespace App\Notifications\Providers;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RejectAuthorization extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($motivo)
    {
        // $this->provider = $provider;
        $this->motivo = $motivo;
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
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->from(getenv('MAIL_FROM_NAME'))
                    ->subject("Información Rechazada - Norson Alimentos")
                    ->greeting("Un saludo cordial, ")
                    ->line("Su registro de proveedor está en fase de autorización.")
                    ->line("La información que ha suministrado se encuentra errada. Es necesario que actualice sus datos en función del siguiente motivo.")
                    ->line($this->motivo)
                    ->action('Entrar', getenv('APP_FRONTEND'))
                    ->line('¡Gracias por querer ser parte de nosotros!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
