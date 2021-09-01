<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
 

class InquiryUnsubscribe extends Mailable 
{
    use Queueable, SerializesModels;

    protected $input;
    protected $admin;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($input, $admin = false)
    {
        $this->input = $input;
        $this->admin = $admin;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        
       
        if($this->admin){
            $this->subject("Unsubscribe Request Recived  ".$this->input['email']);
            $layout = 'emails.admin.unsubscribe.recived';
        }else{
            $layout = 'emails.unsubscribe.recived';
            $this->subject("YOU WILL BE MISSED!");
        }
        return $this->markdown($layout)
        ->with([
            'input' => $this->input,
        ]);     
    }
}
