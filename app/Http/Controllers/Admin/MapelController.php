<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index()
    {
        return view('admin.mapel.index');
    }

    public function create()
    {
        return view('admin.mapel.create');
    }
}
