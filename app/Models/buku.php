<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'id';
    protected $fillable = [
        "buku",
        "keterangan",
        "gambar"
    ];

        // Relationships
    public function Bab(){
        // just having many Bukus
        return $this->hasMany(Bab::class, 'FK_Id_buku', 'id');
    }

}
