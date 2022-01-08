<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoríasController;
use App\Http\Controllers\PeticionesController;

use App\Http\Controllers\EventController;
use App\Http\Controllers\ParticipantsController;
use App\Http\Controllers\EventParticipantsController;
use App\Http\Controllers\TipoInstitucionController;

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

/**/
Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::resource('eventos', 'App\Http\Controllers\EventController');

Route::resource('participantes', 'App\Http\Controllers\ParticipantsController');

Route::resource('evento-participante', 'App\Http\Controllers\EventParticipantsController');

Route::resource('tipoinstitucion', 'App\Http\Controllers\TipoInstitucionController');

Route::resource('institucion', 'App\Http\Controllers\InstitucionController');

Route::resource('section', 'App\Http\Controllers\SectionController');

Route::resource('ticket', 'App\Http\Controllers\TicketController');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('events', [EventController::class, 'show']);





/*Route::get('/', function () {
    return view('welcome');
});*/

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

/*Route::get('/admin/{nom}', [CategoríasController::class, 'ver']);

//Pruebas de  método de objetos Request
Route::get('/peticion', [PeticionesController::class, 'testMethod']);
Route::post('/peticion/{param1}', [PeticionesController::class, 'testPostMethod']);

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
*/



