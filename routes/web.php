<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'page.index')->name('page.index');
Route::view('/agenda', 'page.agenda')->name('page.agenda');
Route::view('/mapa-objectu', 'page.map_object')->name('page.map_object');

Route::get('/kontakt', [ContactController::class, 'index'])->name('page.contact');
Route::post('/kontakt', [ContactController::class, 'save'])->name('page.contact');
