<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'nilai';

    // Primary key
    protected $primaryKey = 'id_murid';

    public $incrementing = false;

    protected $fillable = [
        'id_murid',
        'mapel',
        'tanggal_isi',
        'status',
        'nilai'
    ];

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'mapel', 'mapel');
    }
}
