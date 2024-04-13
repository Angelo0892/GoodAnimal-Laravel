<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AnimalController;

Route::controller(AnimalController::class)->group(function(){
    Route::get('/admin/animal', 'index')->name('admin.animal.index');
    Route::get('/admin/animal/create', 'create')->name('admin.animal.create');
    Route::get('/admin/animal/modify', 'modify')->name('admin.animal.modify');
    Route::get('/admin/animal/show', 'show')->name('admin.animal.show');

    Route::post('/admin/animal', 'store')->name('admin.animal.store');
    Route::put('/admin/animal/{animal}', 'update')->name('admin.animal.update');
    Route::delete('/admin/animal/{animal}', 'destroy')->name('admin.animal.destroy');
});

