<?php

use App\Http\Controllers\FestivalController;
use Illuminate\Support\Facades\Route;




Route::get('/', [FestivalController::class, 'index'])->name('index');




Route::get('/festival/create', [FestivalController::class, 'create'])->name('festival.create');

Route::get('/festival/{id}/edit', [FestivalController::class, 'edit'])->name('festival.edit');
Route::put('/festival/{id}', [FestivalController::class, 'update'])->name('festival.update');

Route::delete('/festival/{id}', [FestivalController::class, 'destroy'])->name('festival.destroy');

Route::get('/festival{id}', [FestivalController::class, 'show'])->name('festival.show');

Route::post('\festival\store', [FestivalController::class, 'store'])->name('festival.store');

Route::resource('/festival', FestivalController::class);


