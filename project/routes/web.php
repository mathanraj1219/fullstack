<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoUController;


Route::get('/', [MoUController::class, 'index'])->name('home');


Route::get('/types', function() {
   return view('types');
})->name('types');


Route::get('/MoUs',[MoUController::class,'selectcolumns'])->name('mous');

Route::get('/types/industrial', [MoUController::class, 'industrial'])->name('types.industrial');

Route::get('/types/intercollege', [MoUController::class, 'intercollege'])->name('types.intercollege');


Route::get('/types/department-mou', function() {
   return view('departmentmou');
})->name('types.departmentmou');
