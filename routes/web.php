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
    return redirect('/picture');
});
Route::get('/pictures','PictureController@index')->name('picture.list');
Route::get('/picture/new','PictureController@create')->name('picture.new');
Route::post('/picture','PictureController@store')->name('picture.store');
Route::get('/picture/edit/{id}','PictureController@edit')->name('picture.edit');
Route::post('/picture/update/{id}','PictureController@update')->name('picture.update');
Route::get('/picture/{id}', 'PictureController@show')->name('picture.show');
Route::delete('/picture/{id}','PictureController@destroy')->name('picture.delete');
?>