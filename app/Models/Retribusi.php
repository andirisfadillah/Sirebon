<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retribusi extends Model
{
    use HasFactory;
    protected $table = 'retribusis';

    public function payments()
{
    return $this->hasMany(pembayaran::class);
}
}
