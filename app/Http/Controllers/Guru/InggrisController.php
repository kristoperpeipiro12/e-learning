<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;


class InggrisController extends Controller
{
    //
    public function index(){
        return view('guru.materi.inggris.index');
    }
}