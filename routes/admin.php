<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\UserController;

Route::controller(UserController::class)->group(function(){
    Route::get('/admin/user', 'index')->name('admin.user.index');
    Route::get('/admin/user/create', 'create')->name('admin.user.create');
    Route::get('/admin/user/{user}/modify', 'modify')->name('admin.user.modify');
    Route::get('/admin/user/{user}/show', 'show')->name('admin.user.show');

    Route::post('/admin/user/store', 'store')->name('admin.user.store');
    Route::put('/admin/user/{user}', 'update')->name('admin.user.update');
    Route::delete('/admin/user/{user}', 'destroy')->name('admin.user.destroy');
});

Route::controller(InformationController::class)->group(function(){
    Route::get('/admin/information', 'index')->name('admin.information.index');
    Route::get('/admin/information/create', 'create')->name('admin.information.create');
    Route::get('/admin/information/{information}/modify', 'modify')->name('admin.information.modify');
    Route::get('/admin/information/{information}/show', 'show')->name('admin.information.show');

    Route::post('/admin/information', 'store')->name('admin.information.store');
    Route::put('/admin/information/{information}', 'update')->name('admin.information.update');
    Route::delete('/admin/information/{information}', 'destroy')->name('admin.information.destroy');
});

