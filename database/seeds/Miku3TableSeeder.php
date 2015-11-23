<?php

use Illuminate\Database\Seeder;
use App\Miku;

class Miku3TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Miku::create([
	   'name'=>'Welcome to the site',
	   'body'=>'Description',
	   'showhide'=>'show',
	   'url'=>'index'
	   ]);
    }
}
