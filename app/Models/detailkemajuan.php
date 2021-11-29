<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailKemajuan extends Model
{
    protected $table = 'detailkemajuan';
    protected $fillable = [
        "FK_Id_kemajuan",
        "FK_Id_bab",
        "keterangan"
    ];

    // Relationships
    public function detailKemajuanBabs(){
        // just having one bab
        return $this->belongsTo(Bab::class, 'FK_Id_bab', 'id');
    }

    public function kemajuans(){
        // just having one bab
        return $this->belongsTo(Kemajuan::class, 'FK_Id_kemajuan', 'id');
    }
}
