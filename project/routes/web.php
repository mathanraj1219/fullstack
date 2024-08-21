<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoUController;


Route::get('/', function () {
    return view('dashboard');
});
Route::get('/',[MoUController::class,'index']);
Route::get('/departments',function() {
    return view('department');
});

Route::get('/MoUs',function() {
    return view('mou');
}); 