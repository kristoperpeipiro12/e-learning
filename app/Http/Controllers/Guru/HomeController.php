<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    //
    public function index(){
        return view('guru.index');
    }
}