<?php
namespace App;

use App\BaseModel;
 
class Faqs extends BaseModel

{
    protected $table = "faqs";
    protected $fillable = [
        'refe_table_name','refe_field_id','status','display_order' , 'question', 'answer'
    ];

   
 
}

