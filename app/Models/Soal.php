<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'jumlah_soal'
    ];

    // Relasi ke model Mapel
    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'id_mapel', 'id_mapel');
    }
}

