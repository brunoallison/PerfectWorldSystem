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
/*Auth::routes();*/
//SITE
Route::get('/','SiteController@index')->name('index');
Route::get('/download','SiteController@download')->name('download');
Route::get('/infos','SiteController@infos')->name('infos');
Route::get('/rank','SiteController@rank')->name('rank');
Route::get('/staff','SiteController@staff')->name('staff');


//Usuarios
Route::get('/cp','AuthUserController@login')->name('login');
Route::post('/login','AuthUserController@postLogin')->name('authUser.login');
Route::get('/logout','AuthUserController@logout')->name('logout');

Route::get('/cp/criar-conta','AuthUserController@create')->name('authUser.create');
Route::post('/cp/criar-conta','AuthUserController@store')->name('authUser.store');


Route::group(['prefix'=>'cp', 'middleware' => ['user']], function () {

    Route::get('/inicio', 'UserController@index')->name('user.index');

    /*//SETORES
    Route::get('/setores', 'SetorController@index')->name('setor.index');
    Route::get('/setor','SetorController@create')->name('setor.create');
    Route::post('/setor','SetorController@store')->name('setor.store');
    Route::get('/setor/{id}', 'SetorController@edit')->name('setor.edit');
    Route::put('/setor/{id}', 'SetorController@update')->name('setor.update');
    Route::delete('/apagar-setor', 'SetorController@destroy')->name('setor.destroy');*/
});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
