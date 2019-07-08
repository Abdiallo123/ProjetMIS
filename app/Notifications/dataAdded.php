<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class dataAdded extends Notification
{
    
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    public  $mail_data;
    public function __construct($mail_data)
    {
        $this->mail_data =  (object)$mail_data;
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
                    ->greeting($this->mail_data->greeting)
                    ->from('abdiallo@misgroupe.com', 'Bella')
                    ->subject($this->mail_data->mail_subject)
                    ->line($this->mail_data->mail_message)
                    ->action($this->mail_data->button_text, url($this->mail_data->message_link))
                    ->line($this->mail_data->mail_footer);
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
