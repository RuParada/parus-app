<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller as Controller;
use AdminSection;
use DB;
use Illuminate\Http\Request;
use Form;

class Flat extends Controller
{
	
	
	
	public function action_index(Request $request){
		
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
		
		$show_city=$request->input('show_city','good');
		$show_price=$request->input('show_price','good_dis');
		
		$view['search']=$search;
		$sql="select i.text, f.price as calc_price, i.price as item_price,  c.name||' '||r.name as city,
				au.type, au.date_auction_str,au.date_public_str,au.date_start_str,au.date_end_str,au.url,
				i.number, f.like, f.id
				from flat f
				join items i on i.id=f.item_id
				join auctions au on au.id=i.auction_id
				left join flat_cities c on c.id=f.city_id
				left join flat_regions r on r.id=c.region_id";
		
		
		$w=[];
		
                if($like==1){
                    $w[]=' f.like=1 ';                   
                }
                
		if(!empty($search)){
			$w[]="i.search like '%'||lower('$search')||'%'";
		}
		
		//Модель
		if($show_city=='bad'){
			$w[]=' f.city_id=0 ';
		}
		elseif ($show_city=='good'){
			$w[]=' f.city_id>0 ';
		}
		
		//Прогноз цена
		if($show_price=='bad'){
			$w[]=' f.price=0 ';
		}
		elseif ($show_price=='good'){
			$w[]=' f.price>0 ';
		}
		elseif ($show_price=='good_dis'){
			$dp=$dis/100;
			$dp=$dp>0? "-$dp" : "+$dp";
			$w[]=" f.price>0 ";
			$w[]=" i.price < f.price*(1$dp) ";
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
			$sql.=" order by f.price";
		}
		else{
			$sql.=" order by au.{$sort}, f.price";
			
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
		
		$view['show_city']=$show_city;
		$view['show_price']=$show_price;
		$view['dis']=$dis;
                
		$view['like']=$like;
                
                
		return AdminSection::view(view('admin.flat.index',$view), 'Search');
		
	}
	
	
	
	
	
}
