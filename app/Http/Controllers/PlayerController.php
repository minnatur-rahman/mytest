<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlayerController extends Controller
{

    public function showPlayer(){
        $players = DB::table('players')->get();
        // return $players;

       return view('allPlayers', ['data' => $players]);
    }


    public function singlePlayer(string $id){
        $players = DB::table('players')->where('id', $id)->get();
        return $players;
    }


}
