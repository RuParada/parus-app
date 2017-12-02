<?php 

AdminSection::registerModel(\App\Auto\Producer::class, function ($model) {
    $model->setTitle('Auto produces');
	
	$model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('name')->setLabel('Наименование'),
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
    ->addMenuPage(\App\Auto\Producer::class, 0)
    ->setIcon('fa fa-bank');