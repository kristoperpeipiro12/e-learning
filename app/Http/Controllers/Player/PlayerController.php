<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        return view('player.mapel');
    }
    public function play($mapel)
    {
        $mapel == 'matematika' ? $mapel = 'mp_1' : $mapel = 'mp_2';
        return view('player.soal', compact('mapel'));
    }
}
