<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kapalku extends Model
{
    protected $table = 'kapalku';
    protected $fillable = ['nama_lengkap', 'telepon', 'nik', 'alamat', 'kelurahan'];
}