<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Soal;
use Illuminate\Http\Request;

class InggrisController extends Controller
{
    //
    public function index()
    {
        $number   = 0;
        $listSoal = Soal::where('id_mapel', 'mp_2')->get();
        return view('admin.materi.inggris.index', compact('listSoal', 'number'));
    }
    public function create()
    {
        return view('admin.materi.inggris.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_mapel'      => 'required|string',
            'soal'          => 'required|string|max:255',
            'gambar_soal'   => 'nullable|image|mimes:jpeg,jpg,png,svg|max:5000',
            'video_soal'    => 'nullable|mimes:mp4,mov,ogg,avi|max:20000',
            'pilihan_a'     => 'required|string|max:50',
            'pilihan_b'     => 'required|string|max:50',
            'pilihan_c'     => 'required|string|max:50',
            'kunci_jawaban' => 'required|string|in:a,b,c',
        ], [
            'gambar_soal.max' => 'Ukuran gambar tidak boleh lebih dari 5MB.',
            'video_soal.max'  => 'Ukuran video tidak boleh lebih dari 20MB.',
        ]);

        $gambarPath = null;
        $videoPath  = null;

        if ($request->hasFile('gambar_soal')) {
            $gambarFile = $request->file('gambar_soal');
            $gambarName = time() . '_' . uniqid() . '.' . $gambarFile->getClientOriginalExtension();
            $gambarPath = $gambarFile->storeAs('soal/gambar', $gambarName, 'public');
        }

        if ($request->hasFile('video_soal')) {
            $videoFile = $request->file('video_soal');
            $videoName = time() . '_' . uniqid() . '.' . $videoFile->getClientOriginalExtension();
            $videoPath = $videoFile->storeAs('soal/video', $videoName, 'public');
        }

        Soal::create([
            'id_mapel'      => $request->id_mapel,
            'soal'          => $request->soal,
            'gambar_soal'   => $gambarPath,
            'video_soal'    => $videoPath,
            'pilihan_a'     => $request->pilihan_a,
            'pilihan_b'     => $request->pilihan_b,
            'pilihan_c'     => $request->pilihan_c,
            'kunci_jawaban' => $request->kunci_jawaban,
        ]);

        return redirect()->route('admin.inggris')->with('success', 'Data berhasil disimpan!');
    }

    public function delete($id)
    {
        $soal = Soal::findOrFail($id);
        $soal->delete();
        return redirect()->route('admin.inggris')->with('success', 'Data berhasil dihapus!');
    }
}
