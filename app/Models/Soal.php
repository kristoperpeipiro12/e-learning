<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;

class Soal extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'soal';

    // Primary key
    protected $primaryKey = 'id_soal';

    // Mengaktifkan auto-increment pada primary key
    public $incrementing = true;

    // Kolom-kolom yang bisa diisi
    protected $fillable = [
        'id_mapel',
        'soal',
        'gambar_soal',
        'video_soal',
        'pilihan_a',
        'pilihan_b',
        'pilihan_c',
        'kunci_jawaban'
    ];
    public function mapel(): BelongsTo
    {
        return $this->belongsTo(Mapel::class, 'id_mapel', 'id_mapel');
    }
}

