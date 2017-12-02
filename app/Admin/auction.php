<?php 

AdminSection::registerModel(\App\Auction::class, function ($model) {
    $model->setTitle('Auction');
	
	$model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('number')->setLabel('Номер лота'),
			AdminColumn::text('date')->setLabel('Дата выставления'),
			AdminColumn::text('date_start')->setLabel('Начало приема заявок'),
			AdminColumn::text('date_end')->setLabel('Конец приема заявок'),
			AdminColumn::text('url')->setLabel('Ссылка'),
			AdminColumn::text('process_number')->setLabel('Номер дела'),
            
        ]);
        $display->paginate(20);
		
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
    ->addMenuPage(\App\Auction::class, 0)
    ->setIcon('fa fa-bank');