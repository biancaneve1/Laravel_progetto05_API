<?php

use App\Http\Controllers\APIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// rotta da cancellare
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


// Route::get('/mio-nome',function(){

// return['name'=>'caio'];

// });                 //esempio


Route::get('/anime/list',[APIController::class, 'index'])->name('api.index');