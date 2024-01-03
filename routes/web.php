<?php

use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PlayerController::class, 'showPlayer'])->name('home');

Route::get('/player/{id}', [PlayerController::class, 'singlePlayer'])->name('view.player');

Route::post('/add', [PlayerController::class, 'addUser'])->name('addPlayer');

Route::get('/update', [PlayerController::class, 'updatePlayer']);

Route::get('/delete/{id}', [PlayerController::class, 'deletePlayer'])->name('view.delete');

Route::get('/deleteAll/', [PlayerController::class, 'deleteAllPlayer']);

Route::view('newPlayer', '/addPlayer');


// Route::get('/', function () {
//     return view('welcome');
// });
