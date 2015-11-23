<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Miku;

class BaseController extends Controller
{
   public function getIndex($id=null){
	//dd($this->metas);
	//$text=Miku::find($id);
	$text=Miku::where('url','=',$id)->first();
	//dd($text);
	//return view('templates.index')->with('id',$id);
	return view('templates.index')->with('text',$text);
	//withId($id)
	//view('',array('id'=>$id))
	}
	
	//http://miku3/base/create
	public function getCreate(){
	$text=new Miku;
	$text->name='Contacts2';
	$text->body='Description2';
	$text->url='contacts2';
	$text->save();
	return redirect('/');
	}
	
	//http://miku3/base/update/3
	public function getUpdate($id=null){
	$text=Miku::find($id);
	$text->name='Вакансии';
	$text->body='Описание';
	$text->url='vacan';
	$text->save();
	return redirect('/');
	}
	
		//http://miku3/base/delete/1
	public function getDelete($id=null){
	$text=Miku::find($id);
	$text->delete();
	return redirect('/');
	}
	
	//http://miku3/base/all
	public function getAll(){
	$text=Miku::all();
	return view('templates.all')->with('text',$text);
	}
	
}
