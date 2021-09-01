<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Inquiries;

class InquiryRecived extends Mailable 
{
    use Queueable, SerializesModels;

    protected $inquiry;
    protected $admin;
    protected $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inquiry, $admin = false, $files = false,$request=[])
    {
        $this->inquiry = $inquiry;
        $this->admin = $admin;
        $this->files = $files;
        $this->request = $request;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
		$prefix = "";
		if(isset($this->request['page'])){
			$prefix = $this->request['page']." - ";
		}
        
       
        if($this->admin){
            $this->subject($prefix."Inquiry Recived ".$this->inquiry->name." ".$this->inquiry->email);
            $layout = 'emails.admin.inquiries.recived';
            $this->replyTo($this->inquiry->email, $this->inquiry->name);
        }else{
            $time = date("G");
            $day = date("N");
            
            if($day == 6 || $day == 7 ){
                $layout = 'emails.inquiries.recived_weekend';
            }else if($time > 17 || $time < 4){
                $layout = 'emails.inquiries.recived_tomorrow';
            }else{
                $layout = 'emails.inquiries.recived';
            }
             
             
            
            $this->subject("Thank you for contacting Citrusbug");
        }

         
        return $this->markdown($layout)
        ->with([
            'inquiry' => $this->inquiry,
            'files' => $this->files,
            'request' => $this->request
        ]);     
    }
}
