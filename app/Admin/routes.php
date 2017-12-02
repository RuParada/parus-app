<?php

Route::get('', ['as' => 'admin.dashboard','middleware' => ['web','auth'], function () {
    Route::auth();
	return AdminSection::view('Parser', 'Dashboard');
}]);

/*Route::group(['prefix'=>'admin','middleware' => ['web','auth']], function () {

    Route::get('/', 'HomeController@index');
});*/
Route::group(['prefix'=>'','middleware' => ['web','auth']], function () {

    Route::get('main', ['as' => 'admin.main', 'uses'=>'\App\Http\Controllers\Admin\Main@action_index' ]);
    Route::get('main/price', ['as' => 'admin.main.price', 'uses'=>'\App\Http\Controllers\Admin\Main@action_price' ]);
    Route::get('main/auto', ['as' => 'admin.main.auto', 'uses'=>'\App\Http\Controllers\Admin\Main@action_auto' ]);
    Route::get('flat/index', ['as' => 'admin.flat.index', 'uses'=>'\App\Http\Controllers\Admin\Flat@action_index' ]);

    Route::get('favorits/autoadd/{id}', ['as' => 'admin.favorits.autoadd','uses'=>'\App\Http\Controllers\Admin\Favorits@action_autoadd' ]);
    Route::get('favorits/flatadd/{id}', ['as' => 'admin.favorits.flatadd','uses'=>'\App\Http\Controllers\Admin\Favorits@action_flatadd' ]);
});