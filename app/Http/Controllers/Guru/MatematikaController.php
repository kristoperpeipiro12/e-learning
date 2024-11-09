<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;


class MatematikaController extends Controller
{
    //
    public function index(){
        return view('guru.materi.matematika.index');
    }
}