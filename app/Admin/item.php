<?php 

AdminSection::registerModel(\App\Item::class, function ($model) {
    $model->setTitle('Item');
	
	$model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('number')->setLabel('Номер лота'),
			AdminColumn::text('text')->setLabel('Описание'),
			AdminColumn::text('price')->setLabel('Начальная цена, руб'),
			AdminColumn::text('step')->setLabel('Шаг'),
			AdminColumn::text('deposit')->setLabel('Задаток'),
			AdminColumn::text('info')->setLabel('Информация о снижении цены'),
			AdminColumn::text('type')->setLabel('Классификация имущества'),
			
            
        ]);
        $display->paginate(100);
		
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
    ->addMenuPage(\App\Item::class, 0)
    ->setIcon('fa fa-bank');