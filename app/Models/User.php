<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Nama tabel
    protected $table = 'users';

    // Primary key
    protected $primaryKey = 'id_user';

    // Kolom-kolom yang bisa diisi
    protected $fillable = [
        'username',
        'password',
    ];

    // Hidden attributes (misalnya untuk menyembunyikan password saat serialisasi)
    protected $hidden = [
        'password',
    ];
}

