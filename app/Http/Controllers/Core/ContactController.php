<?php

namespace App\Http\Controllers\Core;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{  
	protected $request;
	/*public function __construct(Request $request) {
		$this->request = $request;
	}*/

    public function index() {

    	if (view()->exists('contact')) {

	    	// Как альтернатива обращение через путь к шаблону
	    	// /config/view.php - paths
	    	//$path = config('view.paths');
	    	//return view()->file($path[0].'/contact.blade.php')->withTitle('Contact template');


	    	// Назначение имен видов
	    	//view()->name('contact.blade.php','myview');
	    	//return view()->of('myview')->withTitle('Contact template');


	    	// Манипуляции с шаблоном после рендера который превращае в строку
	    	//$view = view('contact.blade.php',['title' => 'Page Contact'])->render();
	    	//echo $view;
	    	//return;


	    	// Узнать путь к шаблону
	    	//echo  view('contact.blade.php')->getPath();
	    	//return;

    		return view('contact')->withTitle('Contact Page');
    	}

    	abort(404);
    }

    public function show(Request $request,$id=false) {

    	if ($request->has('name')) {
    		print('<h1>'.$request->input('name', 'null').'</h1>');
    	}
    	// a $request->exists('name') - вернет TRUE даже если ячейка массива пуста
    	print_r($request->all());
    	print_r($request->only('name','site'));
    	print_r($request->except(['name','site']));

    	print('<code>'.$request->name.'</code>'); // если нет данных из формы то выведет передаваемый путь из form.html/routes.php

    	if ($request->is('contact/*')) {
	    	print($request->path()); 
    	} else if ($request->is('contact')) {
    		echo 'This request domen.contact';
    	}

    	echo "<br/><sub>".$request->url()."</sub>";
    	// Ecли нужно и GET параметры вывести тоже то:
    	echo "<br/><span>".$request->fullUrl()."</span>";

    	// Альтернативы   $request->root() и $request->query() - всех get параметров или $request->query('id')
    	
    	// тип запроса кот. использует пользователь
    	if ($request->isMethod('post')) {
    		//$request->flash();
    		//$request->flashOnly('name');
			/*
    		$request->flashExcept('name','site');
    		echo '<br/	>'.$request->method();
    		redirect()->route('contact');
    		*/

    		// или без flash записать сейсию можно:
    		redirect()->route('contact')->withInput();

    		// Очистить сейсию
    		$request->flush();

    		// Получить доступ к полю в контроллере
    		$request->old('email');
    	}

    	var_dump($request->header());   // Какие заголовки были отправлены
    	var_dump($request->server());   // Суперглобальный массив SERVER
    	var_dump($request->segments()); // Разбиение url на сегменты


    	if (view()->exists('contact')) {
    		return view('contact')->withTitle('Contact Page');
    	}
    }
}