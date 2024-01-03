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
        $player = DB::table('players')
                      ->insertGetId(

                [
                'name' =>  'Amitav Kumar',
                'email' => 'ami@gmail.com',
                'age' => 24,
                'city' => 'puna',

                ]
               );

               return $player;

        // if($player){
        //     echo '<h1>Data Add Successfully</h1>';
        // }else{
        //     echo'<h1>Data Not Added</h1>';
        // }
    }


    public function updatePlayer(){
        $player = DB::table('players')
                        ->where('id', 4)
                        ->decrement('age', 10, ['city' => 'josori']);

        if($player){
            echo '<h1>Data Add Successfully</h1>';
        }else{
            echo'<h1>Data Not Added</h1>';
        }
    }

    public function deletePlayer(string $id){
        $player = DB::table('players')
                        ->where('id', $id)
                        ->delete();

                        if($player){
                            return redirect()->route('home');
                       }
    }

    public function deleteAllPlayer(){
        $player = DB::table('players')
                     ->truncate();


}
}
