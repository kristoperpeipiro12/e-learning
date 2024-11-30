<?php
namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use App\Models\Soal;
use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PlayerController extends Controller
{
    private $habis = false;
    public function index()
    {
        // Reset session ketika pengguna memulai ulang permainan
        session()->forget(['nomor', 'jumlah_benar', 'jumlah_soal', 'mapel']);
        return view('player.mapel');
    }

    public function play($mapel)
    {
        \Log::info('Mapel:', ['mapel' => $mapel]);

        if (session('mapel') === null) {
            $mapel = $mapel === 'matematika' ? 'mp_1' : 'mp_2';
        } else {
            $mapel = session('mapel');
        }

        $nomor = session('nomor', 1);
        $tot_soal = Soal::where('id_mapel', $mapel)->count();
        $soal = Soal::where('id_mapel', $mapel)->skip($nomor - 1)->first();

        if (!$soal) {
            // Semua soal selesai
            $jumlah_benar = session('jumlah_benar', 0);
            $jumlah_soal = session('jumlah_soal', 0);
            $nilai_akhir = ($jumlah_soal > 0) ? ($jumlah_benar / $jumlah_soal) * 100 : 0;
            $username = session('user_name');

            \Log::info('Data yang akan disimpan:', [
                'id_player' => Str::uuid()->toString(),
                'id_mapel' => session('mapel'),
                'username' => $username,
                'score' => $nilai_akhir,
            ]);

            $id_player = Str::uuid()->toString();
            // Simpan data ke database
            Player::create([
                'id_player' => $id_player,
                'id_mapel' => session('mapel'),
                'username' => $username,
                'score' => $nilai_akhir,
            ]);
            $player = Player::where('id_player', $id_player)->first();

            // Redirect ke halaman hasil
            return view('player.result', compact('player', 'jumlah_soal', 'jumlah_benar'));
        }

        // Jika soal masih ada
        $isi_soal = $soal->soal;
        $gambar = $soal->gambar_soal;
        $video = $soal->video_soal;
        $a = $soal->pilihan_a;
        $b = $soal->pilihan_b;
        $c = $soal->pilihan_c;

        session(['mapel' => $mapel, 'soal_id' => $soal->id_soal]);
        return view('player.soal', compact('mapel','isi_soal', 'nomor', 'a', 'b', 'c', 'gambar', 'video'));
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