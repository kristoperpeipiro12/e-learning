<?php
namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use App\Models\Soal;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        // Reset session ketika pengguna memulai ulang permainan
        session()->forget(['nomor', 'jumlah_benar', 'jumlah_soal', 'mapel']);
        return view('player.mapel');
    }

    public function play($mapel)
    {
        \Log::info('Mapel:', ['mapel' => $mapel]);
        // Tentukan mapel
        if (session('mapel') === null) {
            $mapel = $mapel === 'matematika' ? 'mp_1' : 'mp_2';
        } else {
            $mapel = session('mapel');
        }

        // Ambil nomor soal dari sesi, default ke 1
        $nomor = session('nomor', 1);

        \Log::info('Mapel:', ['mapel' => $mapel]);
        \Log::info('Nomor soal:', ['nomor' => $nomor]);

        // Ambil soal berdasarkan nomor
        $soal = Soal::where('id_mapel', $mapel)->skip($nomor - 1)->first();

        if (!$soal) {
            // Jika soal habis, hitung nilai akhir
            $jumlah_benar = session('jumlah_benar', 0);
            $jumlah_soal = session('jumlah_soal', 0);

            $nilai_akhir = ($jumlah_soal > 0) ? ($jumlah_benar / $jumlah_soal) * 100 : 0;
            $username = session('user_name');

            return view('player.result', compact('nilai_akhir', 'jumlah_benar', 'jumlah_soal', 'username'));
        }

        $isi_soal = $soal->soal;
        $gambar = $soal->gambar_soal;
        $video = $soal->video_soal;
        $a = $soal->pilihan_a;
        $b = $soal->pilihan_b;
        $c = $soal->pilihan_c;



        // Simpan data mapel dan soal ke sesi
        session(['mapel' => $mapel, 'soal_id' => $soal->id_soal]);

        return view('player.soal', compact('isi_soal', 'nomor', 'a', 'b', 'c', 'gambar', 'video'));
    }

    public function correction(Request $request)
    {
        // Ambil soal dari sesi
        $soalId = session('soal_id');
        $soal = Soal::find($soalId);

        if (!$soal) {
            return response()->json(['error' => 'Soal tidak ditemukan'], 404);
        }

        // Periksa jawaban
        $isCorrect = $request->jawaban === $soal->kunci_jawaban;

        // Update jumlah benar dan nomor soal di sesi
        $jumlah_benar = session('jumlah_benar', 0) + ($isCorrect ? 1 : 0);
        $nomor = session('nomor', 1) + 1;

        // Update jumlah soal terjawab
        $jumlah_soal = session('jumlah_soal', 0) + 1;

        session([
            'jumlah_benar' => $jumlah_benar,
            'jumlah_soal' => $jumlah_soal,
            'nomor' => $nomor,
        ]);

        // Redirect ke soal berikutnya
        return redirect()->route('player.play', ['mapel' => session('mapel')]);
    }

    public function result()
    {
        return view('player.result');
    }
}