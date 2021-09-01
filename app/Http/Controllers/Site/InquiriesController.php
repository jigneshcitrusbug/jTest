<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Site\Controller;
use App\Inquiries;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Mail;
 
use Illuminate\Http\Request; 
use Request as ServerRequest;
use App\Mail\InquiryRecived; 
use App\Mail\InquiryUnsubscribe;

class InquiriesController extends Controller
{
    use ValidatesRequests;

    
    
    public function __construct() {
         $this->emails = [
            'harsh.shah@citrusbug.com',
            //'ishan.vyas@citrusbug.com',
            'hello@citrusbug.com',
            //'karmraj.vaghela@citrusbug.com',
            'karishma@citrusbug.com',
            'jinesh@citrusbug.com',
        ]; 
		/* $this->emails = [
            'jignesh.citrusbug@gmail.com',
        ];*/		
        $this->unsubscribeemails = [
            'karishma@citrusbug.com',
            'nikita.citrusbug@gmail.com',
        ];     
    }  


    public function index(Request $request){ 
		
		\Session::put('pub_form_start',strtotime("now"));

        $obj = new  \stdClass();
        $obj->title = 'Contact';
        $obj->url = route('site.contact');
        $breadcrumbs[] = $obj;

        $obj = new  \stdClass();
        $obj->title = 'Home';
        $obj->url = route('site.home');
        $breadcrumbs[] = $obj;

        return view('site.contact',[
            // "partners"=> $partners,
            'breadcrumbs'=>$breadcrumbs 
        ]);
 
    }
    

    public function sendmail(Request $request){  

 
        $layout = 'emails.admin.inquiries.recived';
        $invoice = \App\Inquiries::find(1);
        Mail::send($layout, ['invoice' => $invoice], function($message)
        {
            $message->to('themalkesh@gmail.com', 'John Smith')->subject('Welcome!');
        });

        
    }

    public function  unsubscribe(){
        return view('site.unsubscribe',[]);
    }

    public function unsubscribesave(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        $input = $request->except(['']);         
        $input['ip'] = ServerRequest::ip();

        try{
            Mail::to($request->email)
            ->send(new InquiryUnsubscribe($input));

            Mail::to($this->unsubscribeemails)
            ->send(new InquiryUnsubscribe($input,true));

            $result['message'] = trans('common.responce_msg.inquiries_success');
            $result['code'] = 200;

        }catch(exception $e){
            $result['message'] = trans('common.responce_msg.inquiries_fail');
            $result['code'] = 400;
        }
         
        if($request->ajax()){
            return response()->json($result, $result['code']);
        }else{
			return redirect()->back();
		}

    }

    public function save( Request $request){ 

		$diff = 1;
		if(\Session::has('pub_form_start')){
			$pub_form_start = \Session::get('pub_form_start');
			$timenow = strtotime("now");
			$diff = $timenow - $pub_form_start;
		}
		$rules = [
            'name_21' => 'required',
            'email' => 'required|email',
            'phone_21' => 'required',
            'company' => 'required',
            'message' => 'required',
            'country_code' => 'required',
            'g-recaptcha-response' => 'required',
        ];
		if($request->has('page')){
			unset($rules['phone_21'],$rules['company'],$rules['country_code']);
		}
        $request->validate($rules);

        $input = $request->except(['name_21','phone_21']);

        $secret = '6LdEDVwaAAAAACuCwqZyugfFn2C53nYrJsmxZ8NN';
       // $secret = '6LdHG9sUAAAAAAi6HNTeDSRJd7kh2PD8KUcA6Qeo';
        $url = 'https://www.google.com/recaptcha/api/siteverify';

        $client = new \GuzzleHttp\Client();

        $response = $client->request('POST', $url, ['query' => [
            'secret' => $secret, 
            'response' => $input['g-recaptcha-response'],
        ]]);

        $statusCode = $response->getStatusCode();
        $content = $response->getBody();
        $res = json_decode($content, TRUE); 
        if($statusCode !=200 ) {
			
			$result['message'] = 'Robot verification failed, Please try again.'; 
            $result['code'] = 400;
            if($request->ajax()){
                return response()->json($result, $result['code']);
            }
        }  
        $input['name'] = $request->name_21;
        $input['phone'] = $request->phone_21;
        $input['status'] = 0;
        $input['page'] = ServerRequest::server('HTTP_REFERER');
        $input['ip'] = ServerRequest::ip();
		
        $item = Inquiries::create($input);
		
        $uploadedfiles = [];    
        if($request->hasFile('docs')){
            $allowedfileExtension=['pdf','jpg','png','docx'];
            $files = $request->file('docs');
            $upath = public_path('storage').'/docs/'.$item->id.'/';
            foreach($files as $file){
            $filename = str_replace(' ', '_', $file->getClientOriginalName());
            $extension = $file->getClientOriginalExtension();
            $check=in_array($extension,$allowedfileExtension);
                if($check){
                    $file->move($upath,$filename);
                    $uploadedfiles[] = url('/storage/docs/'.$item->id.'/'.$filename);
                }
            }
        }
        
		$triger_mail = 1;
		if($request->has('page')){
			if($diff < \config('settings.min_seconds_form_filling') || ( $request->has("business_name") && $request->business_name != "") || ( $request->form_number < 2 )){
				$triger_mail = 0;
			}
		}else if($diff < \config('settings.min_seconds_form_filling') || ( $request->has("business_name") && $request->business_name != "") || ( $request->pr_count < 50) || ( $request->form_number < \config('settings.min_input_focus'))){
			$triger_mail = 0;
        }
		
		if($triger_mail ==1){
			
			Mail::to($request->email)
				->send(new InquiryRecived($item,false,null));
	 

			Mail::to($this->emails)
				->send(new InquiryRecived($item,true, $uploadedfiles,$request->all()));
			
		}

        if($item){
			$result['message'] = trans('common.responce_msg.inquiries_success');
            $result['code'] = 200;
			
			\Session::put('form_thankyou_data',1);
            $result['rlink'] = route('site.thankYou');
			\Session::put('pub_form_start',strtotime("now"));
        }else{
            $result['message'] = trans('common.responce_msg.inquiries_fail');
            $result['code'] = 400;
        }    

		
        if($request->ajax()){
            return response()->json($result, $result['code']);
        }
        exit; 
    }

}
