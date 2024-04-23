<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;


//Controlador de usuarios
Route::controller(UserController::class)->group(function(){
    Route::get('/admin/user', 'index')->middleware('can:admin.user.index')->name('admin.user.index');
    Route::get('/admin/user/create', 'create')->middleware('can:admin.user.create')->name('admin.user.create');
    Route::get('/admin/user/{user}/modify', 'modify')->middleware('can:admin.user.modify')->name('admin.user.modify');
    Route::get('/admin/user/{user}/show', 'show')->middleware('can:admin.user.show')->name('admin.user.show');

    Route::post('/admin/user/store', 'store')->middleware('can:admin.user.create')->name('admin.user.store');
    Route::put('/admin/user/{user}', 'update')->middleware('can:admin.user.modify')->name('admin.user.update');
    Route::delete('/admin/user/{user}', 'destroy')->middleware('can:admin.user.destroy')->name('admin.user.destroy');
});

//Grupo diseñado para el crud de los roles
Route::controller(RoleController::class)->group(function(){
    Route::get('/role', 'index')->middleware('can:admin.role.index')->name('admin.role.index');
    Route::get('/role/create', 'create')->middleware('can:admin.role.create')->name('admin.role.create');
    Route::get('/role/{role}/show', 'show')->middleware('can:admin.role.show')->name('admin.role.show');
    Route::get('/role/{role}/modify', 'modify')->middleware('can:admin.role.modify')->name('admin.role.modify');

    Route::post('/role', 'store')->middleware('can:admin.role.create')->name('admin.role.store');
    Route::put('/role/{role}', 'update')->middleware('can:admin.role.modify')->name('admin.role.update');
    Route::delete('/role/{role}', 'destroy')->middleware('can:admin.role.destroy')->name('admin.role.destroy');
});

//Controlador de Documentos
Route::controller(InformationController::class)->group(function(){
    Route::get('/admin/information', 'index')->middleware('can:admin.information.index')->name('admin.information.index');
    Route::get('/admin/information/create', 'create')->middleware('can:admin.information.create')->name('admin.information.create');
    Route::get('/admin/information/{information}/modify', 'modify')->middleware('can:admin.information.modify')->name('admin.information.modify');
    Route::get('/admin/information/{information}/show', 'show')->middleware('can:admin.information.show')->name('admin.information.show');

    Route::post('/admin/information', 'store')->middleware('can:admin.information.create')->name('admin.information.store');
    Route::put('/admin/information/{information}', 'update')->middleware('can:admin.information.modify')->name('admin.information.update');
    Route::delete('/admin/information/{information}', 'destroy')->middleware('can:admin.information.destroy')->name('admin.information.destroy');
});

