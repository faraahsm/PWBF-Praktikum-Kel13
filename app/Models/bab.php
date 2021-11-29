<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bab extends Model
{
    protected $table = 'bab';
    protected $primaryKey = 'id';
    protected $fillable = [
        "FK_Id_buku",
        "bab",
        "judul",
        "keterangan"
    ];

    // Relationships
    public function Buku(){
        // just having one Buku
        return $this->belongsTo(Buku::class, 'FK_Id_buku', 'id');
    }

    public function babDetailKemajuans(){
        // having many babs
        return $this->hasMany(DetailKemajuan::class, 'FK_Id_bab', 'id');
    }
}
