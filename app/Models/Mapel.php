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

    protected $primaryKey = 'id_mapel';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'id_mapel',
        'mapel'
    ];


    public function soal(): HasMany
    {
        return $this->hasMany(Soal::class, 'id_mapel', 'id_mapel');
    }
}
