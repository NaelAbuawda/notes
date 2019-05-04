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
Route::get('/', "ListController@list")->name('list');
Route::get('list', 'ListController@list');
Route::get('create', function(){
    return view('create');
})->name('viewCreate');
Route::post('create', 'CreateController@createNote')->name('createNote');