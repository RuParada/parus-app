<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class IndexController extends Controller
{
    protected $header;
    protected $text;

    public function __construct() {

    	$this->header = 'Hello www, this is Marketing stuff!';
    	$this->text = 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.';
    }

    public function index() {

        $data = array(
                        'title' => 'ACME Laravel', 
                        'data' =>[
                                    'one' => 'List 1',
                                    'two' => 'List 2',
                                    'three' => 'List 3',
                                    'four' => 'List 4',
                                    'five' => 'List 5'
                                    ],
                            'dataI' =>['List 1','List 2','List 3','List 4','List 5'],   
                                    
                            'bvar' => true,
                            'script' =>"<script>alert('hello')</script>"
                    );
        return view('index',$data);
    }

    public function index2() {

    	//return view('page')->with('header',$header);
    	//$articles = Article::all();

    	$articles = Article::select(['id','title','desc'])->get();
    	//dump($articles);

    	return view('page')->with([
									'header' => $this->header, 
									'header_text' => $this->text, 
									'articles' => $articles
								]);
    }

    public function show($id) {
    	// $articles = Article::find($id);
    	$article = Article::select(['id','title','text'])->where('id',$id)->first();
    	return view('article-content')->with([
    											'header' => $this->header, 
    											'header_text' => $this->text, 
    											'article' => $article
    										]);
    }

    public function last() {
    	// $articles = Article::find($id);
    	$article = Article::select(['id','title','text'])->last();
    	return view('last')->with(['article' => $article]);
    }

    public function add() {
    	return view('add-content')->with([
											'header' => $this->header, 
											'header_text' => $this->text
										]);
    }

    public function store() {
    	
    }

    
}
