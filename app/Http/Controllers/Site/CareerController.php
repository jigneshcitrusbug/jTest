<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Site\Controller;
use App\Services;
use App\Careers;
use App\Resumes;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\View;
 
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request; 

use App\Mail\CareerRecived; 
use Request as ServerRequest;

class CareerController extends Controller
{
    
    public function __construct() {
        $this->emails = [
            // 'harsh.shah@citrusbug.com',
            // 'themalkesh@gmail.com', 
            'hr@citrusbug.com' 
        ];     
    } 

    public function index(Request $request){ 

       
   
        $careers = \Cache::remember('site_careers', 60*24, function () {
            return Careers::where('status','active')->orderBy('ordering','asc')->get();
        }); 


        $theme = 'dark';

        $obj = new  \stdClass();
        $obj->title = 'Career';
        $obj->url = route('site.services');
        $breadcrumbs[] = $obj;

        $obj = new  \stdClass();
        $obj->title = 'Home';
        $obj->url = route('site.home');
        $breadcrumbs[] = $obj;

        return view('site.career',[
             
            'careers'=>$careers,
            'theme'=>$theme,
            'breadcrumbs'=>$breadcrumbs 
        ]);
    }

    public function save(Request $request){
		
		$diff = 1;
		if(\Session::has('pub_form_start')){
			$pub_form_start = \Session::get('pub_form_start');
			$timenow = strtotime("now");
			$diff = $timenow - $pub_form_start;
		}
		
        $request->validate([
            'career_id' => 'required',
            'name_21' => 'required',
            'email' => 'required|email',
            'phone_21' => 'required',
            //'resume' => 'required',
            //'message' => 'required',
            // 'g-recaptcha-response' => 'required',
        ]);

        $input = $request->except(['resume','phone_21','name_21']);
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

        if($res['success'] != 'true' ) {
            $result['message'] = 'Robot verification failed, Please try again.'; 
            $result['code'] = 400;
            if($request->ajax()){
                return response()->json($result, $result['code']);
            }
        } 

        $input['name'] = $request->name_21;
        $input['phone'] = $request->phone_21; 
		
        $item = Resumes::create($input);

       
        if($request->hasFile('resume')){
            $allowedfileExtension=['pdf','jpg','png','docx'];
            $upath = public_path('storage').'/resume/'.$item->id.'/';
            $file = $request->file('resume');
            $filename = str_replace(' ', '_', $file->getClientOriginalName());
            $extension = $file->getClientOriginalExtension();
            $check=in_array($extension,$allowedfileExtension);
           
            if($check){
                $file->move($upath,$filename);
                $item->resume = '/storage/resume/'.$item->id.'/'.$filename;
                $item->save();
                
            }

        }

        $item->page = ServerRequest::server('HTTP_REFERER');
        $item->ip = ServerRequest::ip();  

		if($diff < \config('settings.min_seconds_form_filling') || ( $request->has("business_name") && $request->business_name != "") || ( $request->pr_count < 50) || ( $request->form_number < \config('settings.min_input_focus'))){
			// No email for spam items
        }else{
		
			Mail::to($request->email)
				->send(new CareerRecived($item));
	 

			Mail::to($this->emails)
				->send(new CareerRecived($item,true, $item->resume));
			
		}	

        if($item){
            $result['message'] = trans('common.responce_msg.career_success');
            $result['code'] = 200;
			
			\Session::put('form_thankyou_data',1);
			$result['rlink'] = route('site.thankYou');
        }else{
            $result['message'] = trans('common.responce_msg.career_fail');
            $result['code'] = 400;
        }    

        if($request->ajax()){
            return response()->json($result, $result['code']);
        }
        exit; 



    }

    public function career( $slug, Request $request){ 

        \Session::put('pub_form_start',strtotime("now"));
        // $career = Careers::where('status','active')->where('slug',$slug)->first();

        $career = \Cache::remember('site_career_'.$slug, 60*24, function () use ($slug) {
            return Careers::where('status','active')->where('slug',$slug)->first();
        }); 

        if($career){
            $theme = 'dark';
            $obj = new \stdClass();
            $obj->title = @$career->title;    
            $obj->url = route('site.career',['slug'=>@$career->slug]);
            $breadcrumbs[] = $obj;
            
            $obj = new  \stdClass();
            $obj->title = 'Careers';
            $obj->url = route('site.careers');
            $breadcrumbs[] = $obj;

            return view('site.single-career',[
                
                'career'=>$career,
                'slug'=>$slug,
                'breadcrumbs'=>$breadcrumbs ,
                'theme'=>$theme,
            ]);
        }else{
            abort(404);
        }

        
    }

}
