<?php

namespace App\Http\Controllers\Core;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function mylogin($name=null, $passw=null)
    {
        //return view('login');
        return view('mylogin',['title' => 'Моя страница авторизации'])->render();
    }
}
