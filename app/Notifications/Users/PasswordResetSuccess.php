<?php
namespace App\Notifications\Users;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
class PasswordResetSuccess extends Notification implements ShouldQueue
{
    use Queueable;

    /**
    * Create a new notification instance.
    *
    * @return void
    */
    public function __construct()
    {
        //
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
        ->subject('Cambio de contraseña exitoso')
        ->greeting('Hola, '.$notifiable->first_name.' '.$notifiable->last_name)
        ->line('Estás recibiendo este email porque se ha realizado un cambio de contraseña para tu cuenta.')
        ->line('Si no has realizado esta acción por favor comunicate con nuestro equipo de soporte.')
        ->salutation('Saludos,')
        ->salutation(config('app_name'));
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
