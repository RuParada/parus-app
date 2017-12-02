<?php 
use App\Auto\Producer;

AdminSection::registerModel(\App\Auto\Mark::class, function ($model) {
    $model->setTitle('Auto model');
	
	$model->onDisplay(function () {
        $display = AdminDisplay::table()
				->with('Producer')
				->setColumns([
			AdminColumn::text('Producer.name')->setLabel('Производитель'),
            AdminColumn::text('name')->setLabel('Модель'),
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
    ->addMenuPage(\App\Auto\Mark::class, 0)
    ->setIcon('fa fa-bank');