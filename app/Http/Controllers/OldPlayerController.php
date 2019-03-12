<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;

class OldPlayerController extends Controller
{
    public function index () {
        $players = \App\Player::all();

        return view('/player/index', ['players' => $players]);
    }

    public function createForm () {
        return view('/player/create');
    }

    public function create() {
        $player = new Player();

        $player->firstname = request('firstname');
        $player->lastname = request('lastname');
        $player->age = \request('age');

        $player->save();

        return redirect('/players');
    }
}
