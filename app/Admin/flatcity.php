<?php 
use App\Auto\Producer;

AdminSection::registerModel(\App\Flat\City::class, function ($model) {
    $model->setTitle('Flat City');
	
	$model->onDisplay(function () {
        $display = AdminDisplay::table()
				->with('Region')
				->setColumns([
			AdminColumn::text('Region.name')->setLabel('Region'),
            AdminColumn::text('name')->setLabel('Город'),
			AdminColumn::text('Region.price')->setLabel('Цена'),
			AdminColumn::text('use')->setLabel('Используется'),
			AdminColumn::text('pattern')->setLabel('Строка поиска'),
			
            
        ]);
        $display->paginate(500);
		

        return $display;

    });
	/*
	$model->onCreateAndEdit(function() {
        return $form = AdminForm::panel()->addBody([
			AdminFormElement::text('name', 'Name'),
            AdminFormElement::text('name', 'Name'),
			AdminFormElement::textarea('text', 'Text'),
			AdminFormElement::checkbox('select', 'Select'),
            
        ]);
        return $form;
    });
	*/
	$model->disableDeleting();
	
})
    ->addMenuPage(\App\Flat\City::class, 0)
    ->setIcon('fa fa-bank');