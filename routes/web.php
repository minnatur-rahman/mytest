<?php

use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;


Route::controller(PlayerController::class)->group(function(){
       Route::get('/', 'showPlayer')->name('home');

       Route::get('/player/{id}', 'singlePlayer')->name('view.player');

       Route::post('/add', 'addUser')->name('addPlayer');

       Route::put('/update/{id}', 'updatePlayer')->name('update.player');
       Route::get('/updatePage/{id}', 'updatePage')->name('update.page');

       Route::get('/delete/{id}', 'deletePlayer')->name('view.delete');
       Route::get('/deleteAll/', 'deleteAllPlayer');

       Route::view('newPlayer', '/addPlayer');
});





// Route::get('/', function () {
//     return view('welcome');
// });
