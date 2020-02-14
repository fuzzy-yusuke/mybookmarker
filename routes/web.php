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
    return redirect('/bookmark');
});
Route::get('/bookmarks','BookmarkController@index')->name('bookmark.list');
Route::get('/bookmark/new','BookmarkController@create')->name('bookmark.new');
Route::get('/bookmark','BookmarkController@store')->name('bookmark.store');
Route::get('/bookmark/edit/{id}','BookmarkController@edit')->name('bookmark.edit');
Route::post('/bookmark/update/{id}','BookmarkController@update')->name('bookmark.update');
Route::get('/bookmark/{id}', 'BookmarkController@show')->name('bookmark.show');
Route::delete('/bookmark/{id}','BookmarkController@destroy')->name('bookmark.delete');