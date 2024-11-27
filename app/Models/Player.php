<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Player extends Model
{
    use HasFactory;
    protected $table = 'player';
    protected $primaryKey = 'id_player';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_mapel',
        'username',
        'score'
    ];

    public function mapel(): BelongsTo
    {
        return $this->belongsTo(Mapel::class, 'id_mapel', 'id_mapel');
    }

}
