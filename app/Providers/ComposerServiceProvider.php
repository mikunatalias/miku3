<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function($view){
		$site=\Config::get('site._metas');
		$link=\Config::get('site.links');
		$view->with('site',$site)->with('links',$link);
		});
		
		View::composer(array('templates.index'),function($view){
		$name=\Config::get('site.name');
		$view->with('name',$name);
		});
		//echo 'test provider';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
