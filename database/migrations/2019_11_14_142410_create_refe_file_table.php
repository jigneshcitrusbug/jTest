<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefeFileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refe_file', function (Blueprint $table) {
            $table->increments('id');
            $table->string('refe_table_name', 55);
            $table->integer('refe_field_id')->default(0);
			$table->string('refe_file_path', 250)->nullable();
            $table->string('refe_file_name', 250)->nullable();
            $table->string('file_real_name', 250)->nullable();
            $table->string('file_code', 150)->nullable();
			$table->string('file_type', 150)->nullable();
			$table->integer('priority')->default(0)->nullable();
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
        Schema::dropIfExists('refe_file');
    }
}
