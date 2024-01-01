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
        $user = DB::table('players')->insert([

            [

                'name' =>  'Limon Kumar',
                'email' => 'adi@gmail.com',
                'age' => 44,
                'city' => 'mumbi',
                'created_at' => now(),
                'updated_at' => now()

            ],
            [

                'name' =>  'Ruhi Kumar',
                'email' => 'shak@gmail.com',
                'age' => 31,
                'city' => 'panama',
                'created_at' => now(),
                'updated_at' => now()

            ],
            [

                'name' =>  'Shiblu Kumar',
                'email' => 'shiblu@gmail.com',
                'age' => 22,
                'city' => 'gaza',
                'created_at' => now(),
                'updated_at' => now()

            ],


        ]);

        if($user){
            echo '<h1>Data Add Successfully</h1>';
        }
    }


}
