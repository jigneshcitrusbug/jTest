<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesPermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roll_permissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('roll_id');
            $table->integer('permission_id');
            $table->string('module');
            $table->integer('value')->default(0);
            $table->index(['roll_id', 'permission_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roll_permissions');
    }
}
