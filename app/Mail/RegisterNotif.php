<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\User;

class RegisterNotif extends Mailable
{
    use Queueable, SerializesModels;

    public $User;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $User)
    {
        $this->User = $User;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('notif.Register-Notif');
    }
}
