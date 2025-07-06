<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

// HOME
Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])
    ->name('home')
    ;


// LOGIN
Route::get('iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'login'])
    ->name('auth.login');

Route::post('iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'authenticate'])
    ->name('auth.authenticate')
    ;

Route::post('cerrar-sesion', [\App\Http\Controllers\AuthController::class, 'logout'])
    ->name('auth.logout')
    ;

// NOVEDADES
Route::get('novedades', [\App\Http\Controllers\AnnouncementsController::class, 'index'])
->name('announcements.index');

Route::get('novedades/{id}', [\App\Http\Controllers\AnnouncementsController::class, 'view'])
->name('announcements.view')
->whereNumber('id');

Route::get('novedades/publicar', [\App\Http\Controllers\AnnouncementsController::class, 'create'])
->name('announcements.create')
->middleware('auth')

;

Route::post('novedades/publicar', [\App\Http\Controllers\AnnouncementsController::class, 'store'])
->name('announcements.store')
->middleware('auth')

;

Route::delete('novedades/{id}/eliminar', [\App\Http\Controllers\AnnouncementsController::class, 'destroy'])
->name('announcements.destroy')
->middleware('auth')
->whereNumber('id')

;

Route::get('novedades/{id}/eliminar', [\App\Http\Controllers\AnnouncementsController::class, 'delete'])
->name('announcements.delete')
->whereNumber('id')
->middleware('auth')

;

Route::get('novedades/editar/{id}', [\App\Http\Controllers\AnnouncementsController::class, 'edit'])
->name('announcements.edit')
->whereNumber('id')
->middleware('auth')

;

Route::put('novedades/editar/{id}', [\App\Http\Controllers\AnnouncementsController::class, 'update'])
->name('announcements.update')
->whereNumber('id')
->middleware('auth')

;

// ADMIN
Route::get('admin/usuarios', [\App\Http\Controllers\AdminController::class, 'users'])
->name('admin.users')
->middleware('auth')
;

Route::get('admin/anuncios', [\App\Http\Controllers\AdminController::class, 'announcements'])
->name('admin.announcements')
->middleware('auth')
;

Route::get('admin/juegos', [\App\Http\Controllers\AdminController::class, 'games'])
->name('admin.games')
->middleware('auth')
;
