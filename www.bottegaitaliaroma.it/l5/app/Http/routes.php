<?php

Route::get('/', '\Bottega\Http\Controllers\HomeController@index');
Route::get('news/{slug}', '\Bottega\Http\Controllers\HomeController@article');

Route::get('index.html', '\Bottega\Http\Controllers\HomeController@index');
// Route::get('team-building.html', '\Bottega\Http\Controllers\PagesController@team_building');
// Route::get('info-clienti.html', '\Bottega\Http\Controllers\StaticController@info_clienti');

Route::get('{param}.html', '\Bottega\Http\Controllers\StaticController@catch_all');

Route::get('pull', '\Bottega\Http\Controllers\HomeController@pull');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


// // Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('image/{path}', function (League\Glide\Server $server, Illuminate\Http\Request $request, $path) {

    // dd($path);
    // dd(public_path());

    $server->outputImage($request);

})->where('path', '.*');

Route::group(array('prefix' => 'admin', 'middleware' => 'auth'), function () {

    Route::post('order', '\Rutorika\Sortable\SortableController@sort');

    Route::post('model/upload_image', '\Bottega\Http\Controllers\Admin\ImagesController@store');
    Route::post('model/get_images', '\Bottega\Http\Controllers\Admin\ImagesController@index');

    Route::post('model/upload_attachment', 'Admin\AttachmentsController@store');

    Route::get('/', function(){
        return redirect()->to('admin/news');
    });

    #   news ROUTES

    Route::get('news', [
        'as'    => 'admin_news',
        'uses'  => '\Bottega\Http\Controllers\Admin\NewsController@index'
        ]);

    Route::get('news/crea', [
        'as'    => 'admin_create_news',
        'uses'  => '\Bottega\Http\Controllers\Admin\NewsController@create'
        ]);

    Route::post('news', [
        'as'    => 'admin_store_news',
        'uses'  => '\Bottega\Http\Controllers\Admin\NewsController@store'
        ]);

    Route::get('news/{id}/modifica', [
        'as'    => 'admin_edit_news',
        'uses'  => '\Bottega\Http\Controllers\Admin\NewsController@edit'
        ]);

    Route::post('news/{id}', [
        'as'    => 'admin_store_news',
        'uses'  => '\Bottega\Http\Controllers\Admin\NewsController@update'
        ]);

    Route::post('news/{id}/rimuovi', [
        'as'    => 'admin_delete_news',
        'uses'  => '\Bottega\Http\Controllers\Admin\NewsController@destroy'
        ]);

    Route::delete('news/{id}/delete_image', [
        'as'    => 'admin_delete_news',
        'uses'  => '\Bottega\Http\Controllers\Admin\NewsController@destroyImage'
        ]);

    

});
Route::get('{view}', function ($view) {
    try {
      return view('static.'.$view);
    } catch (\Exception $e) {
      abort(404);
    }
  })->where('view', '.*');