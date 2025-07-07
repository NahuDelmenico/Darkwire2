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

Route::get('registrarse', [\App\Http\Controllers\AuthController::class, 'register'])
    ->name('auth.register')
    ;

Route::post('registrarse', [\App\Http\Controllers\AuthController::class, 'store'])
    ->name('auth.store')
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

// ADMIN

<<<<<<< Updated upstream

=======
Route::middleware(['auth', 'admin'])->group(function () {
    
    // VISTAS DE ADMIN
>>>>>>> Stashed changes
    Route::get('admin/usuarios', [\App\Http\Controllers\AdminController::class, 'users'])
        ->name('admin.users')
        ->middleware('auth');
    
    Route::get('admin/anuncios', [\App\Http\Controllers\AdminController::class, 'announcements'])
        ->name('admin.announcements')
        ->middleware('auth');
    
    Route::get('admin/juegos', [\App\Http\Controllers\AdminController::class, 'games'])
<<<<<<< Updated upstream
        ->name('admin.games')
        ->middleware('auth');

=======
        ->name('admin.games');

    // JUEGOS
    Route::get('juegos/crear', [\App\Http\Controllers\GamesController::class, 'create'])
    ->name('games.create')
    ->middleware('auth');

    Route::post('juegos/crear', [\App\Http\Controllers\GamesController::class, 'store'])
    ->name('games.store')
    ->middleware('auth');


    Route::get('juegos/{id}/eliminar', [\App\Http\Controllers\GamesController::class, 'delete'])
    ->name('games.delete')
    ->middleware('auth')
    ->whereNumber('id');

    Route::delete('juegos/{id}/eliminar', [\App\Http\Controllers\GamesController::class, 'destroy'])
    ->name('games.destroy')
    ->middleware('auth')
    ->whereNumber('id');

    Route::get('juegos/editar/{id}', [\App\Http\Controllers\GamesController::class, 'edit'])
    ->name('games.edit')
    ->middleware('auth')
    ->whereNumber('id');

    Route::put('juegos/editar/{id}', [\App\Http\Controllers\GamesController::class, 'update'])
    ->name('games.update')
    ->middleware('auth')
    ->whereNumber('id');

    // USUARIOS
    Route::get('usuarios/crear', [\App\Http\Controllers\UserController::class, 'create'])
    ->name('user.create')
    ->middleware('auth')
    ;

    Route::post('usuarios/crear', [\App\Http\Controllers\UserController::class, 'store'])
    ->name('user.store')
    ->middleware('auth')
    ;

    Route::get('usuarios/editar/{id}', [\App\Http\Controllers\UserController::class, 'edit'])
    ->name('user.edit')
    ->whereNumber('id')
    ->middleware('auth')
    ;

    Route::put('usuarios/editar/{id}', [\App\Http\Controllers\UserController::class, 'update'])
    ->name('user.update')
    ->whereNumber('id')
    ->middleware('auth')
    ;

    Route::delete('usuarios/{id}/eliminar', [\App\Http\Controllers\UserController::class, 'destroy'])
    ->name('user.destroy')
    ->middleware('auth')
    ->whereNumber('id')

    ;

    Route::get('usuarios/{id}/eliminar', [\App\Http\Controllers\UserController::class, 'delete'])
    ->name('user.delete')
    ->whereNumber('id')
    ->middleware('auth')

    ;

    Route::get('usuarios/{id}', [\App\Http\Controllers\UserController::class, 'view'])
    ->name('user.view')
    ->middleware('auth')
    ;

    // NOVEDADES
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
});
>>>>>>> Stashed changes

// JUEGOS

Route::get('juegos', [\App\Http\Controllers\GamesController::class, 'index'])->name('games.index');

Route::get('juegos/{id}', [\App\Http\Controllers\GamesController::class, 'view'])
->name('games.view')
->whereNumber('id'); 

