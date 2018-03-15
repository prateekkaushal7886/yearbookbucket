<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use Auth;
use App\User;
use DB;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $password ;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($password)
    {
        //
        $this->password =$password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        $username = Auth::user()->name;

        // go to mail.blade.php

        $this->subject('Yearbook Password')->view('mail',compact('username','password'));



         

    

    }
}
