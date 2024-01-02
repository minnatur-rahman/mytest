<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlayerController extends Controller
{

    public function showPlayer(){
        $players = DB::table('players')
                              ->get();


        // return $players;

       return view('allPlayers', ['data' => $players]);


}


    public function singlePlayer(string $id){
        $player = DB::table('players')->where('id', $id)->get();

        return view('player', ['data' => $player]);
    }



    public function addUser(){
        $player = DB::table('players')->upsert(

                [
                'name' =>  'Shown Kumar',
                'email' => 'abc@gmail.com',
                'age' => 22,
                'city' => 'dhaka',

                ],
                ['email'],
                ['city']




        );

        if($player){
            echo '<h1>Data Add Successfully</h1>';
        }else{
            echo'<h1>Data Not Added</h1>';
        }
    }


}
