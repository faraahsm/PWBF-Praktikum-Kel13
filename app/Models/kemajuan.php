<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kemajuan extends Model
{
    protected $table = 'kemajuan';
    protected $fillable = [
        "FK_Id_santri",
        "FK_Id_pengurus",
        "tanggal",
        "status",
    ];

    // Relationship
    public function detailKemajuans(){
        // having many detailkemajuans
        return $this->hasMany(DetailKemajuan::class, 'FK_Id_kemajuan', 'id');
    }

    public function kemajuanPenguruses(){
        // just having one kemajuan
        return $this->belongsTo(Pengurus::class, 'FK_Id_pengurus', 'id_pengurus');
    }

    public function kemajuanSantris(){
        // just having one kemajuan
        return $this->belongsTo(Santri::class, 'FK_Id_santri', 'id_santri');
    }
}
