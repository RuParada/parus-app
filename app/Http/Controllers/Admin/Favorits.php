<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller as Controller;
use AdminSection;

class Favorits extends Controller
{
	public function action_index(){

            
            
            
            return AdminSection::view('lol', 'LOLGroup LTD admin');;
	}
        
        
        
        public function action_autoadd($id){
            $auto= \App\Auto::Find($id);
            if($auto->exists){
                $auto->like=$auto->like==1 ? 0: 1;
                $auto->save();
                return $auto->like;
            }
            return '-1';
            
        }
        
        public function action_flatadd($id){
            $f= \App\Flat::Find($id);
            if($f->exists){
                $f->like=$f->like==1 ? 0: 1;
                $f->save();
                return $f->like;
            }
            return '-1';
            
        }
	

			
	
	
}
