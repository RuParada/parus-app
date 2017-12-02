<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller as Controller;
use AdminSection;

class Index extends Controller
{
	public function action_index(){

		return AdminSection::view('lol', 'LOLGroup LTD admin');;
	}
	

			
	
	
}
