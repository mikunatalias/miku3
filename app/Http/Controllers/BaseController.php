<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
   public function getIndex($id=null){
	return view('templates.index')->with('id',$id);
	//withId($id)
	//view('',array('id'=>$id))
	}
}
