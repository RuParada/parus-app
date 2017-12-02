<form>

<?php echo Form::select('model_id',$models,$model_id); ?>
<input type="text" value="{{$year}}" name="year" />
	
<input type="submit" value="Цена" />
</form>

{{$price}}