<?php

use App\Languages;
use App\Permissions;
use App\Settings;
use App\Rollpermissions;
use App\Seos;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

use Illuminate\Support\Str;

function getSeoUrl($request)
{

    $url = $request->getpathInfo();

    $result = Str::endsWith($url, "/");
    if (!$result) {
        $url .= "/";
    }
    // if($url == '/'){
    //     $url = '/home/';
    // }
    return $url;
}

function getasset($asset)
{


    $CDN_Bypass = \config('s3.CDN_Bypass');
    if ($CDN_Bypass == true) {
        $return =  asset($asset);
    } else {
        // $CDN_Url = env('CDN_Url');
        $CDN_Url = \config('s3.CDN_Url');
        $return =  $CDN_Url . $asset;
    }
    return $return;
}

function getSetting($module, $key)
{
    return \Cache::remember($module . '_' . $key, 60 * 24, function () use ($module, $key) {
        return @Settings::select('fvalue')->where('fkey', 'default_title')->where('module', $module)->first()->fvalue;
    });
}

function canAccess($module, $action)
{
    $pass = false;
    $user = Auth::user();
    // $permissions = Cache::tags(['permission'])->get('user_permission_'.$user->id);

    $rolls = null;
    foreach ($user->rolls as $rkey => $roll) {
        $rollpermissions = $roll->rollpermissions()->get();
        //$rolls[$rkey]['roll'] = $roll;
        foreach ($rollpermissions as $pkey => $rollpermission) {
            $rolls[$roll->roll_id][$rollpermission->module][$rollpermission->permission_id] = $rollpermission->value;
        }
    }
    $permissions = $rolls;

    // $permissionObj = Cache::remember('Permissions_'.$action, 60*24, function () use ($action) {
    //     return Permissions::select('id')->where('title',$action)->first();
    // });

    $permissionObj = Permissions::select('id')->where('title', $action)->first();

    if ($permissionObj) {
        $found = false;
        if ($permissions) {
            foreach ($permissions as $permission) {
                if (isset($permission[$module])) {
                    if (isset($permission[$module][$permissionObj->id])) {
                        if ($permission[$module][$permissionObj->id] == 1) {
                            $pass = true;
                        }
                        $found = true;
                    }
                }
            }
        }


        if (!$found) {
            if ($permissions) {
                foreach ($permissions as $permission) {
                    if (isset($permission['global'])) {
                        if (isset($permission['global'][$permissionObj->id]) && $permission['global'][$permissionObj->id] == 1) {
                            $pass = true;
                        }
                    }
                }
            }
        }
    }

    if (!$pass) {

        //return redirect()->route('admin.dashboard')->with('message', 'Do Not have access');
    }
    return  $pass;


    // if($user){
    //     $rolls = $user->rolls;
    //     if(count($rolls)>0){
    //         foreach($rolls as $roll){
    //             $rollpermissions = $roll->rollpermissions()->where('module',$module)->get();   
    //             if(count($rollpermissions)>0){
    //                 foreach($rollpermissions as $rollpermission){
    //                     $title = $rollpermission->permission->title;
    //                     if( strtolower($title)  == strtolower($action) && $rollpermission->value == 1 ){
    //                         $pass = true;
    //                     } 
    //                 }
    //             }else{
    //                 $rollpermissions = $roll->rollpermissions()->where('module','global')->get();   
    //                 if(count($rollpermissions)>0){
    //                     foreach($rollpermissions as $rollpermission){
    //                         $title = $rollpermission->permission->title;
    //                         if( strtolower($title)  == strtolower($action) && $rollpermission->value == 1 ){
    //                             $pass = true;
    //                         } 
    //                     }
    //                 } 
    //             }

    //         }
    //     }

    // } 

    //return $pass;
}


function renderAdminMenu($items, $sub = false)
{


    if (count($items) > 0) {
        if ($sub) {
            $output = '<ul class="menu-content">';
        } else {
            $output = '<ul id="main-menu-navigation" data-menu="menu-navigation" data-scroll-to-active="true" class="navigation navigation-main">';
        }
        foreach ($items as $item) {
            //  dd($item->children);
            $active = false;
            $url = URL::current();
            if (strpos($url, $item->href) !== false) {
                $active = true;
            }

            if ($sub) {
                $output .= ' <li class="' . ((isset($item->children) && count($item->children) > 0) ? 'has-sub' : '') . '">';
            } else {
                $output .= ' <li class=" nav-item ' . ((isset($item->children) && count($item->children) > 0) ? 'has-sub' : '') . ' ' . ($active ? 'active' : '') . ' ">';
            }
            if ($sub) {
                if (isset($item->children) && count($item->children) > 0) {
                    $output .= '<a href="#" >';
                } else {
                    $output .= '<a href="' . $item->href . '" target="' . $item->target . '" title="' . $item->title . '" class="menu-item" >';
                }
            } else {
                if (isset($item->children) && count($item->children) > 0) {
                    $output .= '<a href="#" >';
                } else {
                    $output .= '<a href="' . $item->href . '" target="' . $item->target . '" title="' . $item->title . '" >';
                }
            }
            $output .= '<i class="' . $item->icon . '"></i><span data-i18n="" class="menu-title">' . $item->text . '</span>';
            $output .= '</a>';
            if (isset($item->children) && count($item->children) > 0) {
                $output .= renderAdminMenu($item->children, true);
            }
            $output .= '</li>';
        }
        $output .= '</ul>';
    }
    return $output;
}

function Text($text, $values = null)
{
    $text = strtoupper(Str::slug($text, '_'));
    // dd($text);
}

function getLangs()
{
    return Languages::get();
}

// function setSettings($fkey, $value){
//     $context = env('APP_KEY');
//     session([$context.'.'.$fkey => $value]);
// }

function setSession($fkey, $value)
{
    $context = env('APP_KEY');
    //Cache::tags(['settings'])->put($fkey, $value, 1440);
    session([$context . '.' . $fkey => $value]);
}

// function getSettings($fkey,  $default = null){
//     $context = env('APP_KEY');
//         if(( session($context.'.'.$fkey)) !== false && ( session($context.'.'.$fkey)) !== null ){
//             $return =  session($context.'.'.$fkey);
//         }else{
//             $setting = Settings::where('fkey',$fkey)->first();
//             if($setting){
//                 session([$context.'.'.$fkey => $setting->fvalue]);
//                 $return =  $setting->fvalue;  
//             }else{
//                 session([$context.'.'.$fkey => $default]);
//                 $return =  $default;  
//             }
//         }
//     return $return ;
// }
function getSess($fkey,  $default = null)
{
    $context = env('APP_KEY');



    if ((session($context . '.' . $fkey)) !== false && (session($context . '.' . $fkey)) !== null) {
        $return =  session($context . '.' . $fkey);
    } else {
        session([$context . '.' . $fkey => $default]);
        $return =  $default;
    }

    // $return = Cache::tags(['settings'])->get($fkey);
    // if($return == null){
    //     Cache::tags(['settings'])->put($fkey, $default, 1440);
    //     $return = $default;
    // }

    return $return;
}
function getSession($fkey,  $default = null)
{
    $context = env('APP_KEY');
    // if(( session($context.'.'.$fkey)) !== false && ( session($context.'.'.$fkey)) !== null ){
    //     $return =  session($context.'.'.$fkey);
    // }else{
    //     $setting = Settings::where('fkey',$fkey)->first();
    //     if($setting){
    //         session([$context.'.'.$fkey => $setting->fvalue]);
    //         $return =  $setting->fvalue;  
    //     }else{
    //         session([$context.'.'.$fkey => $default]);
    //         $return =  $default;  
    //     }
    // }


    $return = \Cache::remember($fkey, 60 * 24, function () use ($fkey, $default) {

        $setting = Settings::where('fkey', $fkey)->first();

        if ($setting) {
            return $setting->fvalue;
        } else {
            return $default;
        }
    });




    // $return = Cache::tags(['settings'])->get($fkey);


    // if($return == null){
    //     $setting = Settings::where('fkey',$fkey)->first();
    //     if($setting){
    //         Cache::tags(['settings'])->put($fkey, $setting->fvalue, 1440);
    //         $return =  $setting->fvalue;  
    //     }else{
    //         Cache::tags(['settings'])->put($fkey, $default, 1440);
    //         $return = $default;
    //     }
    // }
    return $return;
}
function checkpermission($roll, $permission, $module)
{
    $context = env('APP_KEY');
    //$fkey = $module."_roll_".$roll."_permission_".$permission;
    $fkey = $module . ".roll_" . $roll . ".permission_" . $permission;

    if ((session($context . '.' . $fkey)) !== false && (session($context . '.' . $fkey)) !== null) {
        $return =  session($context . '.' . $fkey);
    } else {
        $rollpermission = Rollpermissions::where('roll_id', $roll)->where('permission_id', $permission)->where('module', $module)->first();
        if ($rollpermission) {
            if ($rollpermission->value == 1) {
                session([$context . '.' . $fkey => true]);
                $return =  true;
            } else {
                //session([$context.'.'.$fkey => false]);
                $return =  false;
            }
        } else {
            if ($module != 'global') {
                $rollpermission = Rollpermissions::where('roll_id', $roll)->where('permission_id', $permission)->where('module', 'global')->first();
                if ($rollpermission) {
                    if ($rollpermission->value == 1) {
                        session([$context . '.' . $fkey => true]);
                        $return =  true;
                    } else {
                        //session([$context.'.'.$fkey => false]);
                        $return =  false;
                    }
                } else {
                    //session([$context.'.'.$fkey => false]);
                    $return =  false;
                }
            } else {
                //session([$context.'.'.$fkey => false]);
                $return =  false;
            }
        }
    }
    return $return;
}

function make_null($value)
{
    $value = $value->toArray();
    array_walk_recursive($value, function (&$item, $key) {
        $item =  $item === null ? "" : $item;
    });
    return $value;
}

function uploadImage($image, $path, $imageName, $height, $width)
{
    $image = Image::make($image->getRealPath());

    $path = public_path() . '/' . $path;

    File::exists($path) or mkdir($path, 0777, true);

    $image->fit($width, $height, function ($constraint) {
        $constraint->aspectRatio();
    })->save($path . '/' . $imageName);

    return $imageName;
}

function uploadBase64($files, $item, $type, $imgs_priority)
{
    $path = 'uploads/' . $item->getTable() . '/' . $item->id;
    $upath = public_path('storage') . '/' . $path;

    $path_thumb = $upath . '/thumb';
    \File::exists($path_thumb) or mkdir($path_thumb, 0777, true);

    $name = uniqid() . "_" . $item->id . '.png';
    $imgob = str_replace('data:image/png;base64,', '', $files);

    \File::put($upath . '/' . $name, base64_decode($imgob));

    if (filesize($upath . '/' . $name) > 0) {

        $img = Image::make($upath . '/' . $name, array(

            'width' => 100,
            'height' => 100,
            'grayscale' => false
        ));

        $img->save($path_thumb . '/' . $name);

        $requestData = array();
        $requestData['refe_file_path'] = $path;
        $requestData['refe_file_name'] = $name;
        $requestData['file_real_name'] = $name;
        $requestData['priority'] =  0;
        $requestData['refe_field_id'] = $item->id;
        $requestData['refe_table_name'] = $item->getTable();
        $requestData['file_type'] = $type;
        \App\Refefile::create($requestData);
    } else {
        if (\File::exists($path . '/' . $name)) {
            unlink($path . '/' . $name);
        }
    }
    return 1;
}
function uploadModalReferenceFile($files, $item, $type, $imgs_priority, $multiple = true)
{
    $path = 'uploads/' . $item->getTable() . '/' . $item->id;
    $upath = public_path('storage') . '/' . $path;
    $path_thumb = $upath . '/thumb';
    \File::exists($path_thumb) or mkdir($path_thumb, 0777, true);

    $upload = 0;

    foreach ($files as $i => $file) {

        $timestamp = uniqid();
        $real_name = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $name = $timestamp . "_" . $item->id . "." . $extension;

        if (in_array($extension, ['jpg', 'jpeg', 'png', 'PNG', 'JPEG', 'JPG'])) {

            $img = Image::make($file->getRealPath(), array(
                'width' => 100,
                'height' => 100,
                'grayscale' => false
            ));

            $img->save($path_thumb . '/' . $name);
        }
        $file->move($upath, $name);

        $requestData = array();
        $requestData['refe_file_path'] = $path;
        $requestData['refe_file_name'] = $name;
        $requestData['file_real_name'] = $real_name;
        $requestData['priority'] = (isset($imgs_priority[$real_name])) ? $imgs_priority[$real_name] : 0;
        $requestData['refe_field_id'] = $item->id;
        $requestData['refe_table_name'] = $item->getTable();
        $requestData['file_type'] = $type;
        $Refefile = \App\Refefile::create($requestData);


        if (!$multiple) {
            $refes = \App\Refefile::where('refe_file_path', $path)->where('file_type', $type)->where('id', '!=', $Refefile->id)->get();
            foreach ($refes as $refe) {
                removeRefeImage($refe);
            }
        }

        $upload++;
    }
    return $upload;
}


function removeRefeImage($refe)
{
    if ($refe) {

        $path = public_path('storage');

        if ($refe->refe_file_name && $refe->refe_file_name != "" && \File::exists($path . "/" . $refe->refe_file_path . "/" . $refe->refe_file_name)) {
            unlink($path . "/" . $refe->refe_file_path . "/" . $refe->refe_file_name);
        }
        if ($refe->refe_file_name && $refe->refe_file_name != "" && \File::exists($path . "/" . $refe->refe_file_path . "/thumb/" . $refe->refe_file_name)) {
            unlink($path . "/" . $refe->refe_file_path . "/thumb/" . $refe->refe_file_name);
        }

        $refe->delete();
    }
}
