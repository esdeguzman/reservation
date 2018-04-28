<?php

namespace App\Notifications;

use App\Reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ReservationSuccessful extends Notification
{
    use Queueable;

    protected $reservation;

    /**
     * Create a new notification instance.
     *
     * @param Reservation $reservation
     */
    public function __construct(Reservation $reservation)
    {
        $this->reservation = $reservation;
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
                    ->greeting('A schedule has been successfully reserve!')
                    ->line('This email is in connection to your reservation request for the course '
                                . $this->reservation->schedule->branchCourse->course->name . ' at NEWSIM '
                                . $this->reservation->branch->name . '.')
                    ->line('Please be informed that this reservation will be null and void if not fully paid '
                                . '24 hrs after is has been requested. Below are the information you need in order '
                                . 'to pay this reservation and secure your seat.')
                    ->line('Reservation code: ' . $this->reservation->code)
                    ->line('Please pay to any BPI branch using account name: NEWSIM + (branch name)')
                    ->line('Account Number: 000-0000-0000-0000')
                    ->line('Amount : P 5,000.00');
    }

    /**
     *
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
