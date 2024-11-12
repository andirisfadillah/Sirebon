<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefBank extends Model
{
    use HasFactory;

    protected $table = 'ref_bank';
    protected $fillable = ['nama_bank'];

<<<<<<< HEAD
    public function msRekenings()
    {
=======
    public function msRekenings(){
>>>>>>> a9b61bb87acca09106d68d902e3a7cbac7838827
        return $this->hasMany(MsRekening::class, 'id_ref_bank');
    }
}
