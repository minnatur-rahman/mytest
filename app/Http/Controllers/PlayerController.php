<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlayerController extends Controller
{

    public function showPlayer(){
        $players = DB::table('players')

                              ->Paginate(4)
                              ->fragment('user');

        // return $players;

       return view('allPlayers', ['data' => $players]);


}


    public function singlePlayer(string $id){
        $player = DB::table('players')->where('id', $id)->get();

        return view('player', ['data' => $player]);
    }



    public function addUser(Request $req){
        $player = DB::table('players')
                ->insert(

                [
                'name' =>  $req->playerName,
                'email' => $req->playerEmail,
                'age' => $req->playerAge,
                'city' => $req->playerCity,

                ]
               );

        if($player){
            return redirect()->route('home');
        }else{
            echo'<h1>Data Not Added</h1>';
        }
    }

    public function updatePage(string $id){
        // $player = DB::table('players')->where('id', $id)->get();
        $player = DB::table('players')->find($id);
        return view('updatePlayer', ['data' => $player]);
    }


    public function updatePlayer(Request $re, $id){

        $player = DB::table('players')
                        ->where('id', $id)
                        ->update([
                            'name' =>  $re->playerName,
                            'email' => $re->playerEmail,
                            'age' => $re->playerAge,
                            'city' => $re->playerCity,
                        ]);

        if($player){
            return redirect()->route('home');
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
