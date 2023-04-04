<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::resource('music', Pagecontroller::class);

// Route::get('music', [Pagecontroller::class, 'index']);

// Route::get('/music/{music}', [PageController::class, 'show'])->name('music.show');

// Route::get('/music/create', [PageController::class, 'create'])->name('music.create');

// Route::post('music', [PageController::class, 'store'])->name('music.store'); //post per inviare

// Route::get('/music/{music}/edit', [PageController::class, 'edit'])->name('music.edit'); //get per ricevere

// Route::put('/music/{music}/update', [PageController::class, 'update'])->name('music.update'); //put per la modifica 

