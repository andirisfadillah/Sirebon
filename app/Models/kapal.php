<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kapal extends Model
{
    use HasFactory;
    protected $table = 'kapal_wajib';
    protected $fillable = ['id_user', 'nama_pemilik', 'nama_kapal', 'jenis_kapal', 'ukuran'];


    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}


