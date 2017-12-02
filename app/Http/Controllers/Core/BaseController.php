<?php

namespace App\Http\Controllers\Core;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function __construct() {
		//$this->middleware('mymiddle');
	}
    //list materials
    public function getArticles() {}
	 //material
    public function getArticle($id) { echo 'This id is => '.$id; }

    public function index() {
    	if (view()->exists('page.admin')) {

    		return view('page.admin')->withTitle('Admin');
    		//return response()->view('page.admin',['title'=>'Admin']);

    	}
    }
}
