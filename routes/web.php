<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ParticipantsController;
use App\Http\Controllers\EventParticipantsController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::resource('eventos', 'App\Http\Controllers\EventController');

Route::resource('participantes', 'App\Http\Controllers\ParticipantsController');

Route::resource('evento-participante', 'App\Http\Controllers\EventParticipantsController');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('events', [EventController::class, 'show']);

