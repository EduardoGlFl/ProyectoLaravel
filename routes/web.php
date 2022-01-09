<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('auth.login');
});

/*use App\Http\Controllers\CategoríasController;
Route::get('/admin/{nom}', [CategoríasController::class, 'ver']);
*/

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

Route::resource('purchase', 'App\Http\Controllers\ComprasController');

Route::resource('purchasedetails', 'App\Http\Controllers\ComprasDetalleController');



// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('events', [EventController::class, 'show']);
