<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Model as TraitModel;
use Auth;
class BaseModel extends Model
{
	use SoftDeletes;
	use TraitModel;
	
	protected $appends = ['created_formated','created_humans'];

	protected  static function booted()
    {
        parent::booted();

        static::creating(function ($model) {
			$user = Auth::user();
		 
			if (\Schema::hasColumn($model->getTable(),"created_by") && $user) {
                $model->created_by = $user->id;
               
			}

			if (\Schema::hasColumn($model->getTable(),"updated_by") && $user) {
                $model->updated_by = $user->id;
            }
			 
			
			if(\Schema::hasColumn($model->getTable(),"slug")){
				$model->slug = BaseModel::createslug($model);
            }
            
            if(\Schema::hasColumn($model->getTable(),"status")){
				$model->status = $model->status == "on" ? 1 : 0;
			}

			if(\Schema::hasColumn($model->getTable(),"param")){

				$model->param = json_encode($model->param);
			}

			 
        });

        static::updating(function ($model) {
			$user = Auth::user();
		 
		
			if (\Schema::hasColumn($model->getTable(),"created_by") && $user) {
                $model->created_by = $user->id;
               
			}

			if (\Schema::hasColumn($model->getTable(),"updated_by") && $user) {
                $model->updated_by = $user->id;
            }
			 
			
			if(\Schema::hasColumn($model->getTable(),"slug")){
				$model->slug = BaseModel::createslug($model);
			}
        });

        static::created(function ($model) {

			// $request = request();

			// $relations = request('relation', null);
			// dd($relations);
			// if($relations){
			// 	foreach($relations as $md=>$keys){
			// 		$relation = $md;
			// 		$relationMethod = $model->$relation();
			// 		$relationMethod->detach(); 
			// 		//$mdl = 'App\\'.$md;
			// 		foreach($keys as $key){
			// 			$relationMethod->attach($key); 
			// 		} 
					
			// 	}
			// }
 

           
        });
        static::updated(function ($model) {

			 

            // $relations = request('relation', null);
			// dd($relations);
			// if($relations){
			// 	foreach($relations as $md=>$keys){
			// 		$relation = $md;
			// 		$relationMethod = $model->$relation();
			// 		dd($relationMethod);
			// 		$relationMethod->detach(); 
			// 		//$mdl = 'App\\'.$md;
			// 		foreach($keys as $key){
			// 			$relationMethod->attach($key); 
			// 		} 
					
			// 	}
			// }

        });
        static::deleted(function ($model) {
            
        });
        
    }


	public static function createslug($model){
		$slug_base = uniqid();
		if($model->slug != ""){
			$slug_base = $model->slug;
		}else if(\Schema::hasColumn($model->getTable(),"name")){
			$slug_base = $model->name;
		}else if(\Schema::hasColumn($model->getTable(),"title")){
			$slug_base = $model->title;
		}else if(\Schema::hasColumn($model->getTable(),"designation")){
			$slug_base = $model->designation;
		}
		
		$slug_base = str_slug($slug_base);
		$slug = $slug_base;
		
		$get = true;
		$i = 1;
		while($get){
			
			$isexist=\DB::table($model->getTable())->where('slug',$slug)->where('id','<>',$model->id)->count();
			if($isexist > 0){
				$slug = $slug_base.'-'.$i;
			}else{
				$slug_base = $slug;
				$get = false;
			}
			
			$i++;
		}
		
		return $slug_base;
	}
		 
}
