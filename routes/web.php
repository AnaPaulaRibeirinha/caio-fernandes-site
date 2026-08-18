<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClippingController;


use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ClippingController as AdminClippingController;
use App\Http\Controllers\Admin\StatisticController;

use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

/*
|--------------------------------------------------------------------------
| Páginas públicas
|--------------------------------------------------------------------------
*/

Route::view('/sobre', 'pages.sobre')
    ->name('sobre');

Route::view('/servicos', 'pages.servicos.index')
    ->name('servicos.index');

Route::view('/projetos', 'pages.projetos.index')
    ->name('projetos.index');

Route::get('/clipping', [ClippingController::class, 'index'])
    ->name('clipping.index');

Route::view('/contato', 'pages.contato')
    ->name('contato');

/*
|--------------------------------------------------------------------------
| Painel administrativo
|--------------------------------------------------------------------------
*/

Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', [AdminDashboardController::class, 'index'])
            ->name('dashboard');

        Route::resource('services', ServiceController::class)
            ->except('show');

        Route::resource('projects', ProjectController::class)
            ->except('show');
        Route::resource('clippings', AdminClippingController::class)
            ->except('show');
        Route::resource('statistics', StatisticController::class)
            ->except('show');


    });

require __DIR__.'/auth.php';