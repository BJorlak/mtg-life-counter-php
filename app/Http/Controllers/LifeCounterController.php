<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifeCounterController extends Controller
{
    public function index()
    {
        return view('life-counter');
    }

    public function update(Request $request)
{
    $request->validate([
        'player1_life' => 'required|numeric|min:0',
        'player2_life' => 'required|numeric|min:0',
    ]);

    $player1_life = $request->input('player1_life');
    $player2_life = $request->input('player2_life');

    return view('life-counter', compact('player1_life', 'player2_life'));
}

}

