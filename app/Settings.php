<?php



namespace App;

use App\BaseModel;
 
class Settings extends BaseModel

{

    protected $table = "settings";

    protected $fillable = [

        'fkey', 'fvalue', 'module','finformation','ftype'
    ];

    public function storeAjax(Request $request){
        
        $setting = Settings::where('fkey',$request->key)->first();
        if($setting){
            $setting->fvalue = $request->value;
            $setting->save();
        }else{
            Settings::create([
                'fkey'=> $request->key,
                'fvalue' => $request->value,
            ]);
        }

        // Cache::forget($request->key);
        // Cache::remember( $request->key , 1440, function () use($request  ) {
                
             
        //         return $request->value;  
            
        // });

         

        setSession($request->key, $request->value);
        return($setting);
    }

    public function setlang($lang){
        $setting = Settings::where('fkey','active_lang')->first();
        if($setting){
            $setting->fvalue = $lang;
            $setting->save();
        }else{
            Settings::create([
                'fkey'=> 'active_lang',
                'fvalue' => $lang,
            ]);
        }
        setSession('active_lang', $lang);
        return back();
    }
   
}

