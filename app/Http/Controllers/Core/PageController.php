<?php

namespace App\Http\Controllers\Core;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Response;

class PageController extends Controller
{
    public function privacyShow() {

    	if (view()->exists('page.privacy')) {

    		$view = view('page.privacy')->withTitle('Privacy policy')->render();
    		//return (new Response($view,200,$header=array()))->header('HeaderTest-Type', 'newType');

    		// аналогия отклика конструктора Response
    		//return response($view)->header('HeaderTest-Type', 'newType');

    		// return JSON format
    		//return response()->json(['name'=>'Rus']);

    		// Альтернатива конструктора Response и другая реализация функции response
    		/*
    		*/
    		return response()->view('page.privacy',['title'=>'Privacy policy']);

    		// Передача файла пользователю на скачивание
			/*
    		return response()->download('favicon.ico','fav.ico',['headerOne'=>'TestTextHead','headerTwo'=>'TestTextHead2']);

    		*/


    		/*
    		return redirect('/');
    		return new RedirectResponse('/');
    		return RedirectResponse::create('/');

    		return redirect()->route('home');
			return redirect()->action('Core\ContactController@show');

    		return response()->myResult('wow');
    		
    		*/

    	}
    }
}
