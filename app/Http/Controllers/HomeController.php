<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('layouts.index');
    }

    public function saveName(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Simpan nama ke session
        session(['user_name' => $request->input('name')]);

        return redirect()->route('player.mapel')->with('success', 'Nama berhasil disimpan!');
    }
}