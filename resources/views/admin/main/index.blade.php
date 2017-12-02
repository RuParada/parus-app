
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
  
  <script>
  $( function() {
    $( ".ju_datepicker" ).datepicker({
      numberOfMonths: 3,
	  dateFormat: 'dd-mm-yy'
    });
  } );
  </script>
  

<form>
Название	
<input type="text" name="search" value="{{$search}}" />
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

</form>

</br>

<table class="table table-striped">
	<tr>
		<th style="width:600px" class="row-header">  Описание</a></th>
		<th style="width:150px" class="row-header">
			<a href="" >Цена</a>
			@if($sort=='price')*@endif
		</th>
		<th style="width:150px" class="row-header">
			Тип
		</th>
		<th style="width:120px" class="row-header">
			<a href="" >Дата публикации</a>
			@if($sort=='date_public')*@endif
		</th>
		<th style="width:120px" class="row-header">
			<a href="" >Дата аукциона</a>
			@if($sort=='date_auction')*@endif
		</th>
		
		<th style="width:120px" class="row-header">
			<a href="" >Начало приема заявок</a>
			@if($sort=='date_start')*@endif
		</th>
		<th style="width:120px" class="row-header">
			<a href="" >Конец приема заявок</a>
			@if($sort=='date_end')*@endif
		</th>
		<th style="width:100px" class="row-header">Cсылка</th>
	</tr>

	@foreach ($data as $item)
		<tr >

			<td  class="row-text">{{$item->text}}</td>
			<td class="row-text">{{$item->price}}</td>
			<td class="row-text">{{$item->type}}</td>
			<td class="row-text">{{$item->date_public_str}}</td>
			<td class="row-text">{{$item->date_auction_str}}</td>
			<td class="row-text">{{$item->date_start_str}}</td>
			<td class="row-text">{{$item->date_end_str}}</td>
			<td class="row-text"><a href="http://bankrot.fedresurs.ru/{{$item->url}}" target="_blank">смотреть</a></td>
		</tr>
	@endforeach

</table>