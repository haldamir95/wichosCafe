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


Route::get('/homes', function () {
    if( Auth::user() ){//se valida si esta logueado
        if( Auth::user()->rol =='admin' ){//se valida el tipo de usuario
            return redirect('/homeAdmin');
        }elseif (Auth::user()->rol =='trabajador'){
            return redirect('/home');
        }

    }else{
        return view('welcome');
    }
        
        
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<<<<<<< HEAD
Route::get('/caja','HomeController@iraCaja');
=======

//------------------ Modificar User
Route::put('/user/{id}', 'HomeController@ModificarUser');
//------------------ Mostrar Edicion User
Route::get('/users/{id}', 'HomeController@mostrarUsersEditar');
>>>>>>> 756543ce8fd134f7d13409a81d816ae9428b427b
