<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


class InggrisController extends Controller
{
    //
    public function index()
    {
        return view('admin.materi.inggris.index');
    }
    public function create()
    {
        return view('admin.materi.inggris.create');
    }
}