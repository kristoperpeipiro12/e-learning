<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mapel extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'mapels';

    protected $primaryKey = 'mapel';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'id_mapel',
        'mapel'
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($mapel) {
            if (empty($mapel->id_mapel)) {
                // Generate id_mapel dengan prefix 'mp_' dan angka auto-increment
                $lastMapel = self::orderBy('id_mapel', 'desc')->first();
                // Ambil data id_mapel terakhir berdasarkan urutan
                $lastIdNumber = $lastMapel ? (int) substr($lastMapel->id_mapel, 3) : 0;
                $mapel->id_mapel = 'mp_' . str_pad($lastIdNumber + 1, 3, '0', STR_PAD_LEFT);
                // Ekstrak angka dari ID terakhir menggunakan substr dan tambahkan 1
            }
        });
    }

    public function soal(): HasMany
    {
        return $this->hasMany(Soal::class, 'id_mapel', 'id_mapel');
    }
}
