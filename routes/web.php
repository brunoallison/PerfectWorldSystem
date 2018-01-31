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
Route::get('/mail','MailController@index')->name('mail.index');
Route::get('/postMail','MailController@post')->name('mail.post');

Route::get('/cp/criar-conta','AuthUserController@create')->name('authUser.create');
Route::post('/cp/criar-conta','AuthUserController@store')->name('authUser.store');

Route::group(['prefix'=>'cp', 'middleware' => ['user']], function () {

    Route::get('/inicio', 'UserController@index')->name('user.index');
    Route::get('/perfil', 'UserController@perfil')->name('user.perfil');

    Route::group(['prefix' => 'minha-conta'], function (){
        Route::get('/sacar-gold', 'UserController@sacar-gold')->name('user.sacar-gold');
        Route::get('/logs', 'UserController@logs')->name('user.logs');
        Route::get('/logs', 'UserController@logs')->name('user.logs');
    });

    Route::group(['prefix' => '/loja'], function (){
        Route::group(['prefix' => '/itens'], function (){
            Route::get('/consumiveis', 'UserController@sacar-gold')->name('user.sacar-gold');
            Route::get('/pedras', 'UserController@logs')->name('user.logs');
            Route::get('/montarias', 'UserController@logs')->name('user.logs');
            Route::get('/voos', 'UserController@logs')->name('user.logs');
        });

        Route::get('/carrinho-compras', 'UserController@sacar-gold')->name('user.sacar-gold');
        Route::get('/historico-compras', 'UserController@logs')->name('user.logs');
    });

    Route::group(['prefix' => 'rifas'], function (){
        Route::group(['prefix' => 'especial'], function (){
            Route::get('/andamento', 'UserController@sacar-gold')->name('user.sacar-gold');
            Route::get('/finalizada', 'UserController@logs')->name('user.logs');
        });
        Route::group(['prefix' => 'normal'], function (){
            Route::get('/andamento', 'UserController@sacar-gold')->name('user.sacar-gold');
            Route::get('/finalizada', 'UserController@logs')->name('user.logs');
        });
        Route::group(['prefix' => 'gratis'], function (){
            Route::get('/andamento', 'UserController@sacar-gold')->name('user.sacar-gold');
            Route::get('/finalizada', 'UserController@logs')->name('user.logs');
        });
    });

    Route::group(['prefix' => 'eventos'], function (){
        Route::get('/resgate', 'UserController@sacar-gold')->name('user.sacar-gold');
        Route::get('/senha-secreta', 'UserController@logs')->name('user.logs');
    });

    Route::group(['prefix' => 'doacoes'], function (){
        Route::get('/fazer-doacao', 'UserController@sacar-gold')->name('user.sacar-gold');
        Route::get('/ver-pedidos', 'UserController@logs')->name('user.logs');
    });

    Route::group(['prefix' => 'personagens'], function (){
    });



    Route::get('/chat', 'ChatController@chat')->name('user.chat');
    Route::post('/send', 'ChatController@send')->name('user.send');

    Route::get('/check', function (){
       return session('chat');
    });

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
