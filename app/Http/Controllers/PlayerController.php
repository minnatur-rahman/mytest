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
        $player = DB::table('players')->insert([

                [
                'name' =>  'Shown Kumar',
                'email' => 'adil@gmail.com',
                'age' => 42,
                'city' => 'konia',
                'created_at' => now(),
                'updated_at' => now()
                ],
                [
                'name' =>  'Rajon Kumar',
                'email' => 'rajon@gmail.com',
                'age' => 34,
                'city' => 'rajstaha',
                'created_at' => now(),
                'updated_at' => now()
                ],
                [
                'name' =>  'shojib Kumar',
                'email' => 'shojib@gmail.com',
                'age' => 23,
                'city' => 'chandigar',
                'created_at' => now(),
                'updated_at' => now()
                ],



        ]);

        if($player){
            echo '<h1>Data Add Successfully</h1>';
        }
    }


}
