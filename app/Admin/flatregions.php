<?php 
use App\Auto\Producer;

AdminSection::registerModel(\App\Flat\Region::class, function ($model) {
    $model->setTitle('Flat region');
	
	$model->onDisplay(function () {
        $display = AdminDisplay::table()
				->setColumns([
			AdminColumn::text('name')->setLabel('Регион'),
            AdminColumn::text('price')->setLabel('Цена'),
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
    ->addMenuPage(\App\Flat\Region::class, 0)
    ->setIcon('fa fa-bank');