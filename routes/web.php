<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\NavigationController;

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

Route::controller(NavigationController::class)->group(function () {
    Route::get('/', 'index')->name('navigation.index');
    Route::get('/catalogo', 'catalogo')->name('navigation.catalogo');
    Route::get('/noticias', 'noticias')->name('navigation.noticias');
    Route::get('/contacto', 'contacto')->name('navigation.contacto');
    Route::get('/animal/{information}', 'animal')->name('navigation.animal');
});

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
