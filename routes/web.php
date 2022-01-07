<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoríasController;

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
use Illuminate\Support\Facades\View;

/*Route::get('/admin', function() {
    if(View::exists('nanagement.adminfront1')) {
        return view('management.adminfront', ['nameAdmin' => 'Principal']);
    }
    else {
        //return view::make('welcome', ['nombre'=>'Juan'])
        //return View::make('welcome',['nombre'=>'Juan'])
        return View::make('welcome')->with('nombre','Juan')
                                    ->with('apellido', 'Pérez');
    }
});*/

Route::get('/admin/{nom}', [CategoríasController::class, 'ver']);

Route::get('hi', function(){
    echo 'Hola mundo';
});

Route::get('ID/{id}', function($id){
    echo 'ID: '.$id;
});

Route::get('user/{name?}', function($name = 'Emiliano Sánchez'){
    return $name;
})->where('name', '[A-Za-z]+');

Route::get('user/{uuid}', function($uuid){
    return $uuid;
})->whereUuid('uuid');

Route::get('user/profile', 
        'UserController@showProfile')->name('profile');

Route::view('bienvenido', 'welcome', 
    ['name'=> 'Juan']);



/*Route::get('/', function () {
    return view('welcome');
});*/