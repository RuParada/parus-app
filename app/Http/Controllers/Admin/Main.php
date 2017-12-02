<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller as Controller;
use AdminSection;
use DB;
use Illuminate\Http\Request;
use Form;
use PH;

class Main extends Controller
{
	public function action_index(Request $request){
		
		$view=[];
		$search=$request->input('search');
		
		$date_auction_from=$request->input('date_auction_from');
		$date_auction_to=$request->input('date_auction_to');
		$date_public_from=$request->input('date_public_from');
		$date_public_to=$request->input('date_public_to');
		$date_start_from=$request->input('date_start_from');
		$date_start_to=$request->input('date_start_to');
		$date_end_from=$request->input('date_end_from',date('d-m-Y',time()));
		$date_end_to=$request->input('date_end_to');
		
		
		
		$view['search']=$search;
		$sql='select i.text, i.price, a.date_auction_str, a.date_public_str, a.date_start_str,a.date_end_str,
				a.url,a.type
				from items i
				join auctions a on a.id=i.auction_id';
		
		
		$w=[];

		if(!empty($search)){
			$w[]="search like '%'||lower('".PH::ToSearch($search)."')||'%'";
		}
		
		if (!empty($date_auction_from)){
			$d=explode('-',$date_auction_from);
			$d=mktime(0,0,0, $d[1],$d[0],$d[2]);
			$w[]=" a.date_auction >=$d";
		}
		
		if (!empty($date_auction_to)){
			$d=explode('-',$date_auction_to);
			$d=mktime(0,0,0, $d[1],$d[0],$d[2]);
			$w[]=" a.date_auction <= $d";
		}
		
		if (!empty($date_public_from)){
			$d=explode('-',$date_public_from);
			$d=mktime(0,0,0, $d[1],$d[0],$d[2]);
			$w[]=" a.date_public >=$d";
		}
		
		if (!empty($date_public_to)){
			$d=explode('-',$date_public_to);
			$d=mktime(0,0,0, $d[1],$d[0],$d[2]);
			$w[]=" a.date_public <= $d";
		}
		
		
		if (!empty($date_start_from)){
			$d=explode('-',$date_start_from);
			$d=mktime(0,0,0, $d[1],$d[0],$d[2]);
			$w[]=" a.date_start >=$d";
		}
		
		if (!empty($date_start_to)){
			$d=explode('-',$date_start_to);
			$d=mktime(0,0,0, $d[1],$d[0],$d[2]);
			$w[]=" a.date_start <=$d";
		}
		
		if (!empty($date_end_from)){
			$d=explode('-',$date_end_from);
			$d=mktime(0,0,0, $d[1],$d[0],$d[2]);
			$w[]=" a.date_end >=$d";
			
		}
		
		if (!empty($date_end_to)){
			$d=explode('-',$date_end_to);
			$d=mktime(0,0,0, $d[1],$d[0],$d[2]);
			$w[]=" a.date_end <=$d";
		}

		
		$sort=$request->input('sort','price');
		
		
		$sql.=' where '.implode(' and ', $w);
		
		if($sort!='price'){
			$sql.=" order by a.{$sort}, i.price";
		}
		else{
			$sql.=" order by i.price";
		}
		
		if(empty($search)){
			$sql.=' limit 100';
		}


		$view['data']= DB::select($sql);
		$view['date_auction_from']=$date_auction_from;
		$view['date_auction_to']=$date_auction_to;
		$view['date_public_from']=$date_public_from;
		$view['date_public_to']=$date_public_to;
		$view['date_start_from']=$date_start_from;
		$view['date_start_to']=$date_start_to;
		$view['date_end_from']=$date_end_from;
		$view['date_end_to']=$date_end_to;
		$view['sort']=$sort;

		
	
		return view('admin.main.index',$view);
	}
	
	
	
	public function action_auto(Request $request){
		
		$view=[];
		$search=$request->input('search');
		$like=$request->input('like',0);
                
		$date_auction_from=$request->input('date_auction_from');
		$date_auction_to=$request->input('date_auction_to');
		$date_public_from=$request->input('date_public_from');
		$date_public_to=$request->input('date_public_to');
		$date_start_from=$request->input('date_start_from');
		$date_start_to=$request->input('date_start_to');
		$date_end_from=$request->input('date_end_from',date('d-m-Y',time()));
		$date_end_to=$request->input('date_end_to');
		$show=$request->input('show','good');
		$dis=$request->input('dis',10);
		
		$show_model=$request->input('show_model','good');
		$show_year=$request->input('show_year','good');
		$show_price=$request->input('show_price','good_dis');
		
		$view['search']=$search;
		$sql="select i.text, a.price as calc_price, i.price as item_price, ap.created_at, ap.name||' '||am.name||' - '||a.year as model,
				au.type, au.date_auction_str,au.date_public_str,au.date_start_str,au.date_end_str,au.url,
				i.number, a.like, a.id
				from auto a
				join items i on i.id=a.item_id
				join auctions au on au.id=i.auction_id
				left join auto_models am on am.id=a.model_id
				left join auto_producers ap on ap.id=am.producer_id";
		
		
		$w=[];
		
                if($like==1){
                    $w[]=' a.like=1 ';                   
                }
                
                
		if(!empty($search)){
			$w[]="search like '%'||lower('".PH::ToSearch($search)."')||'%'";
		}
		
		//Модель
		if($show_model=='bad'){
			$w[]=' a.model_id=0 ';
		}
		elseif ($show_model=='good'){
			$w[]=' a.model_id>0 ';
		}
		
		
		//Год
		if($show_year=='bad'){
			$w[]=' a.year=0 ';
		}
		elseif ($show_year=='good'){
			$w[]=' a.year>0 ';
		}
		
		//Прогноз цена
		if($show_price=='bad'){
			$w[]=' a.price=0 ';
		}
		elseif ($show_price=='good'){
			$w[]=' a.price>0 ';
		}
		elseif ($show_price=='good_dis'){
			$dp=$dis/100;
			$w[]=" a.price>0 ";
			$w[]=" i.price < a.price*(1-$dp) ";
		}
		
		


		
		
		if (!empty($date_auction_from)){
			$d=explode('-',$date_auction_from);
			$d=mktime(0,0,0, $d[1],$d[0],$d[2]);
			$w[]=" au.date_auction >=$d";
		}
		
		if (!empty($date_auction_to)){
			$d=explode('-',$date_auction_to);
			$d=mktime(0,0,0, $d[1],$d[0],$d[2]);
			$w[]=" au.date_auction <= $d";
		}
		
		if (!empty($date_public_from)){
			$d=explode('-',$date_public_from);
			$d=mktime(0,0,0, $d[1],$d[0],$d[2]);
			$w[]=" au.date_public >=$d";
		}
		
		if (!empty($date_public_to)){
			$d=explode('-',$date_public_to);
			$d=mktime(0,0,0, $d[1],$d[0],$d[2]);
			$w[]=" au.date_public <= $d";
		}
		
		
		if (!empty($date_start_from)){
			$d=explode('-',$date_start_from);
			$d=mktime(0,0,0, $d[1],$d[0],$d[2]);
			$w[]=" au.date_start >=$d";
		}
		
		if (!empty($date_start_to)){
			$d=explode('-',$date_start_to);
			$d=mktime(0,0,0, $d[1],$d[0],$d[2]);
			$w[]=" au.date_start <=$d";
		}
		
		if (!empty($date_end_from)){
			$d=explode('-',$date_end_from);
			$d=mktime(0,0,0, $d[1],$d[0],$d[2]);
			$w[]=" au.date_end >=$d";
			
		}
		
		if (!empty($date_end_to)){
			$d=explode('-',$date_end_to);
			$d=mktime(0,0,0, $d[1],$d[0],$d[2]);
			$w[]=" au.date_end <=$d";
		}

		if (count($w)>0){
			$sql.=' where '.implode(' and ', $w);
		}
		
		$sort=$request->input('sort','price');
		if($sort=='price'){
			$sql.=" order by i.price";
		}
		elseif($sort=='price_calc'){
			$sql.=" order by a.price";
		}
		else{
			$sql.=" order by au.{$sort}, i.price";
			
		}
		
		
		//$sql.=' limit 500';
		
		
		
	
		
		
		
		
		
		$view['data']= DB::select($sql);
		$view['date_auction_from']=$date_auction_from;
		$view['date_auction_to']=$date_auction_to;
		$view['date_public_from']=$date_public_from;
		$view['date_public_to']=$date_public_to;
		$view['date_start_from']=$date_start_from;
		$view['date_start_to']=$date_start_to;
		$view['date_end_from']=$date_end_from;
		$view['date_end_to']=$date_end_to;
		$view['show']=$show;
		$view['sort']=$sort;
		
		$view['show_model']=$show_model;
		$view['show_year']=$show_year;
		$view['show_price']=$show_price;
		$view['dis']=$dis;
                $view['like']=$like;
		
		return AdminSection::view(view('admin.main.auto',$view), 'Search');
		
	}
	
	
	
	public function action_price(Request $request){
			
		$view=[];
		$view['price']='null';
		$sql="SELECT m.id,p.name||' '||m.name as name
				from auto_models m
				join auto_producers p on p.id=m.producer_id
				order by 1,2";
			
		foreach (DB::select($sql) as $item){
			$a[$item->id]=$item->name;
		}
		
		$model_id=$request->input('model_id');
		$year=$request->input('year');
		
		$mark=\App\Auto\Mark::FindOrNew($model_id);
		if ($mark->exists){
			
			if ($year>=1990 and $year<=2016){
				$p=new \App\Parser\Avito();
				$view['price']=$p->GetPriceAuto($mark,$year);
			}
			else{
				$view['price']='Введите год 1990 - 2016';
			}
		
		}
		
		$view['models']=$a;
		$view['model_id']=$model_id;
		$view['year']=$year;
		
		return AdminSection::view(view('admin.main.price',$view), 'Price calc');;
	}
	
}
