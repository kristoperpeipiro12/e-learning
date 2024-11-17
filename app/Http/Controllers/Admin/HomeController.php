<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mapel;
use App\Models\Soal;


class HomeController extends Controller
{
    //
    public function index()
    {
        $totMapel = Mapel::count();
        $totSoal = Soal::count();
        return view('admin.dashboard.index', compact('totMapel', 'totSoal'));
    }
}