<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WajibRetribusi extends Model
{
    use HasFactory;

    protected $table = 'wajib_retribusi';

    protected $fillable = [
        'id_user',
        'nama_lengkap',
        'telepon',
        'nik',
        'alamat',
        'kelurahan',
    ];
}
