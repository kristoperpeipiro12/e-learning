<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use App\Models\Soal;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    protected $jum_soal;
    protected $jum_benar;
    protected $jum_terjawab;
    protected $nomor = 1;
    public function index()
    {
        return view('player.mapel');
    }
    public function play($mapel)
    {
        $mapel == 'matematika' ? $mapel = 'mp_1' : $mapel = 'mp_2';
        $this->jum_soal = Soal::where('id_mapel', $mapel)->count();
        $this->jum_soal = $this->jum_soal - $this->jum_terjawab;
        $nomor = $this->nomor;
        return view('player.soal', compact('mapel'));
    }

    public function correction($mapel){
        $this->jum_soal = Soal::where('id_mapel',$mapel)->count();
        
    }
}