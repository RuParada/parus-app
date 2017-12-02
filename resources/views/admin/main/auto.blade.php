
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
  
  <script>
  $( function() {
        $( ".ju_datepicker" ).datepicker({
          numberOfMonths: 3,
              dateFormat: 'dd-mm-yy'
        });
	
	$('#show_price').change(function(){
		
		
		
		if ($(this).val()=='good_dis'){
			$('#discont').show();
		}
		else{
			$('#discont').hide();
		}
	})
	
	$('#show_price').change();
        
        $('.button_like').click(function(){
            
            var img=this
            
            $.ajax({
                    url: "/admin/favorits/autoadd/"+img.id,
                    success: function(data){
                            if(data == '1'){
                                img.src='/img/like.png';
                                return null;
                            }
                            if(data == '0'){
                                img.src='/img/notlike.png';
                                return null;
                            }
                            alert ('Error when try add auto to favorits');
                            
                    },
                    
                    });
                    return null;
            })

        
        
        
	
  } );
  </script>
  
@if ($like==1) <img src="/img/like.png" />  @endif
<form>
Название	
<input type="text" name="search" value="{{$search}}" />
<br>
Модель
{{Form::select('show_model',['all'=>'Все','bad'=>'Не определена','good'=>'Определена',],$show_model)}}
<br>
Год
{{Form::select('show_year',['all'=>'Все','bad'=>'Не определен','good'=>'Определен',],$show_year)}}
<br>
Прогноз цена
{{Form::select('show_price',['all'=>'Все','bad'=>'Не определена','good'=>'Определена','good_dis'=>'Определена, дисконт',],$show_price,['id'=>'show_price'])}}
<span id="discont">
Дисконт
<input type="text" name="dis" value="{{$dis}}" size="2"/>%
</span>
<br>



<br>




Дата публикации
<input type="text" name="date_public_from" value="{{$date_public_from}}" class="ju_datepicker" />
<input type="text" name="date_public_to" value="{{$date_public_to}}" class="ju_datepicker"/>
<br>

Дата аукциона
<input type="text" name="date_auction_from" value="{{$date_auction_from}}" class="ju_datepicker" />
<input type="text" name="date_auction_to" value="{{$date_auction_to}}" class="ju_datepicker"/>
<br>
Начало приема заявок
<input type="text" name="date_start_from" value="{{$date_start_from}}" class="ju_datepicker"/>
<input type="text" name="date_start_to" value="{{$date_start_to}}" class="ju_datepicker"/>
<br>
Конец приема заявок
<input type="text" name="date_end_from" value="{{$date_end_from}}" class="ju_datepicker"/>
<input type="text" name="date_end_to" value="{{$date_end_to}}" class="ju_datepicker"/>

<br>
<input type="submit" value="Найти" />
<a href="/admin/main/auto">очистить</a>
</form>

</br>

<table class="table table-striped">
	<tr>
		<th style="width:600px" class="row-header">  Описание</th>
                <th style="width:60px" class="row-header">  Избранное</th>
		<th style="width:120px" class="row-header">
			<a href="{{Smart::query(['sort'=>'price'])}}" >Цена аукциона</a>
			@if($sort=='price')*@endif
		</th>
		<th style="width:120px" class="row-header">
			<a href="{{Smart::query(['sort'=>'price_calc'])}}" >Цена прогноз</a>
			@if($sort=='price_calc')*@endif
		</th>
		<th style="width:100px" class="row-header">
			<a>Модель</a>
		</th>
		<th style="width:100px" class="row-header">
			<a>Тип</a>
		</th>
		<th style="width:100px" class="row-header">
			<a href="{{Smart::query(['sort'=>'date_public'])}}" >Дата публикации</a>
			@if($sort=='date_public')*@endif
		</th>
		<th style="width:100px" class="row-header">
			<a href="{{Smart::query(['sort'=>'date_auction'])}}" >Дата аукциона</a>
			@if($sort=='date_auction')*@endif
		</th>
		
		<th style="width:100px" class="row-header">
			<a href="{{Smart::query(['sort'=>'date_start'])}}" >Начало приема заявок</a>
			@if($sort=='date_start')*@endif
		</th>
		<th style="width:100px" class="row-header">
			<a href="{{Smart::query(['sort'=>'date_end'])}}" >Конец приема заявок</a>
			@if($sort=='date_end')*@endif
		</th>
		<th style="width:20px" class="row-header">
			<a>Номер</a>
		</th>
		
		<th style="width:80px" class="row-header">Cсылка</th>
	</tr>

	@foreach ($data as $item)
		<tr >

			<td  class="row-text">{{$item->text}}</td>
                        <td class="row-text">
                            @if($item->like==1) 
                                <img class="button_like" id="{{$item->id}}" style="cursor:pointer" src="/img/like.png" />
                            @else 
                                <img class="button_like" id="{{$item->id}}" style="cursor:pointer" src="/img/notlike.png" />
                            @endif
                        </td>
			<td class="row-text">{{$item->item_price}}</td>
			<td class="row-text">{{$item->calc_price}}</td>
			<td class="row-text">{{$item->model}}</td>
			<td class="row-text">{{\App\Auction::GetType($item->type)}}</td>
			<td class="row-text">{{$item->date_public_str}}</td>
			<td class="row-text">{{$item->date_auction_str}}</td>
			<td class="row-text">{{$item->date_start_str}}</td>
			<td class="row-text">{{$item->date_end_str}}</td>
			<td class="row-text">{{$item->number}}</td>
			<td class="row-text"><a href="http://bankrot.fedresurs.ru{{$item->url}}" target="_blank">смотреть</a></td>
		</tr>
	@endforeach

</table>