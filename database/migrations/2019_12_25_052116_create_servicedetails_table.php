<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicedetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicedetails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumText('title');
            $table->string('slug')->unique();
            $table->mediumText('desc');	
            $table->mediumText('description');
            $table->timestamps();
            $table->softDeletes();	
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicedetails');
    }
}