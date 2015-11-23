<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Miku3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miku3',function($table){
		$table->increments('id');
		$table->string('name',60);
		$table->text('body');
		$table->enum('showhide',array('show','hide'));
		$table->string('url',60);
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
        Schema::drop('miku3');
    }
}
