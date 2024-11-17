<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index()
    {
        $listMapel = Mapel::all();
        $number = 0;
        return view('admin.mapel.index', compact('number', 'listMapel'));
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'mapel' => 'required|string|max:35'
        ]);

        //upload data
        $id_mapel = 'mp_' . (Mapel::count() + 1);

        //create data
        Mapel::create([
            'id_mapel' => $id_mapel,
            'mapel' => $request->mapel
        ]);

        //redirect
        return redirect()->route('admin.mapel')->with('success', 'Data berhasil disimpan!');
    }
}
