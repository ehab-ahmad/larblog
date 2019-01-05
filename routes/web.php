<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function () {
    Route::get('/post/create','postcontroller@create')->name('createpost');
	Route::post('/post/store','postcontroller@store')->name('storepost');
	Route::get('/category/create','categorycontroller@create')->name('create.category');
	Route::post('/category/store','categorycontroller@store')->name('store.category');
	Route::get('/categories','categorycontroller@index')-> name('categories');
	Route::get('/category/edit/{id}','categorycontroller@edit')->name('category.edit');
	Route::get('/category/delete/{id}','categorycontroller@destroy')->name('category.delete');
	Route::post('category/update/{id}','categorycontroller@update')->name('category.update');






	
});


