<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Survey;
use App\Refefile;

use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use Session;
use Auth;
use Carbon;

class ReferenceController extends Controller
{
    
    public function destroy($id,Request $request)
    {
        $item = Refefile::where("id",$id)->first();

        $result = array();

        if($item){
			removeRefeImage($item);
            $item->delete();
            $result['message'] = trans('common.responce_msg.record_deleted_succes');
            $result['code'] = 200;

        }else{
            $result['message'] = trans('common.responce_msg.something_went_wr');
            $result['code'] = 400;
        }

        if($request->ajax()){
            return response()->json($result, $result['code']);
        }else{
            Session::flash('flash_message',$result['message']);
			return redirect()->back();
        }
    }


}
