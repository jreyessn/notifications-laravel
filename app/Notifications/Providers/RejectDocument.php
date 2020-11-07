<?php

namespace App\Notifications\Providers;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RejectDocument extends Notification
{
    use Queueable;

    private $provider;
    private $document;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($provider, $document, string $note = '')
    {
        $this->provider = $provider;
        $this->document = $document;
        $this->note = $note;
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
                    ->from(getenv('MAIL_FROM_ADDRESS'), getenv('MAIL_FROM_NAME'))
                    ->subject("Documento Rechazado - Norson Alimentos")
                    ->line("El documento {$this->document->title} de su registro como proveedor ha sido rechazado")
                    ->line("Motivo: {$this->note}")
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
