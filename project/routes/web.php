<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoUController;


Route::get('/', [MoUController::class, 'index'])->name('home');


Route::get('/types', function() {
   return view('types');
})->name('types');

Route::get('/outcomes',[MoUController::class,'outcomes'])->name('outcomes');

Route::get('/MoUs',[MoUController::class,'selectcolumns'])->name('mous');

Route::get('/types/industrial', [MoUController::class, 'industrial'])->name('types.industrial');

Route::get('/types/intercollege', [MoUController::class, 'intercollege'])->name('types.intercollege');

Route::get('/department-mou/{department}', [MoUController::class, 'showDepartmentMoUs'])->name('department.mous');


Route::get('/types/department-mou', function() {
   return view('departmentmou');
})->name('types.departmentmou');



Route::get('/mous/manage', [MoUController::class, 'manage'])->name('mous.manage');

// Route to handle the storage of a new MoU
Route::post('/mous/store', [MoUController::class, 'store'])->name('mous.store');

// Route to handle the deletion of an existing MoU
Route::delete('/mous/delete', [MoUController::class, 'destroy'])->name('mous.destroy');


