<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoUController;


Route::get('/', function () {
    return view('dashboard');
});
Route::get('/',[MoUController::class,'index']);
Route::get('/types',function() {
    return view('department');
});

Route::get('/MoUs',function() {
    return view('mou');
}); 

Route::get('/types/industrial',function(){
    return view('industrial');
});
Route::get('/types/intercollege',function(){
    return view('intercollege');
});

Route::get('/types/department-mou',function(){
    return view('departmentmou');
});
