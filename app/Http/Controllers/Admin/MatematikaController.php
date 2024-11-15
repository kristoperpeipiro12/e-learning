<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


class MatematikaController extends Controller
{
    //
    public function index()
    {
        return view('admin.materi.matematika.index');
    }

    public function create()
    {
        return view('admin.materi.matematika.create');
    }
}