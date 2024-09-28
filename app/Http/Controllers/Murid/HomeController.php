<?php

namespace App\Http\Controllers\Murid;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index(){
        return view('murid.index');
    }
}