<?php

use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PlayerController::class, 'showPlayer']);




// Route::get('/', function () {
//     return view('welcome');
// });
