<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ClippingController;
use App\Http\Controllers\Admin\StatisticController;
use App\Http\Controllers\HomeController;
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

Route::view('/clipping', 'pages.clipping.index')
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
        Route::resource('clippings', ClippingController::class)
            ->except('show');
        Route::resource('statistics', StatisticController::class)
            ->except('show');


    });

require __DIR__.'/auth.php';