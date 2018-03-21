<?php

namespace App\Mail;




use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;
use App\Transfer;
use Auth;


class InvoiceMail extends Mailable
{
    use Queueable, SerializesModels;
    //public $user;
    

    /**
     * Create a new message instance.
     *
     * @return void
     */
    

    public function __construct()
    {
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $user=Auth::user();
        $user->transfers;
       //$user = User::with('transfers.flights')->latest()->first();
        \Log::info($user);
        return $this->view('invoice',compact('user'));
        

                
        
    }
}
