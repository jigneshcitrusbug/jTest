<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
 

class CareerRecived extends Mailable 
{
    use Queueable, SerializesModels;

    protected $career;
    protected $admin;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($career, $admin = false, $files = false)
    {
        $this->career = $career;
        $this->admin = $admin;
        $this->files = $files;
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
            $this->subject("Job Inquiry Recived "." ".$this->career->career->title." ".$this->career->name." ".$this->career->email);
            $layout = 'emails.admin.career.recived';
            $this->replyTo($this->career->email, $this->career->name);
        }else{
            
            $time = date("G");
            $day = date("N");
            
            if($day == 6 || $day == 7 ){
                $layout = 'emails.career.recived_weekend';
            }else if($time > 17 || $time < 4){
                $layout = 'emails.career.recived_tomorrow';
            }else{
                $layout = 'emails.career.recived';
            }
             
            $this->subject("Thank you for contacting Citrusbug");
        }
        return $this->markdown($layout)
        ->with([
            'career' => $this->career,
        ]);     
    }
}
