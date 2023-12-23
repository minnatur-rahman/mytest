<?php

use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PlayerController::class, 'showPlayer']);

Route::get('/player/{id}', [PlayerController::class, 'singlePlayer'])->name('view.player');




// Route::get('/', function () {
//     return view('welcome');
// });
