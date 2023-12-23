<?php

namespace Database\Seeders;
use App\Models\player;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rules\Unique;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $json = File::get(path:'database/json/players.json');
        $players = collect(json_decode($json));

        $players->each(function($player){
            player::create([
                'name' => $player->name,
                'email' => $player->email,
                'age' => $player->age,
                'city'=> $player->city
            ]);
        });


        //  for($i=1; $i<=20; $i++){
        //     player::create([
        //         'name' => fake()->name(),
        //         'email' => fake()->unique()->email(),
        //         'age' => fake()->age(),
        //         'city' => fake()->city()
        //     ]);

        //  }


    }
}
