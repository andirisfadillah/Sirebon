<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kapalku extends Model
{
    use HasFactory;
    protected $table= 'kapalku';
    protected $fillable= [
      'nama_lengkap',  
      'telepon',  
      'nik',  
      'alamat',  
      'kelurahan',  
    ];
}