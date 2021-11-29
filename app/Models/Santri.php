<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Santri extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'santri';
    protected $primaryKey = 'id_santri';
    protected $fillable = [
        "nama_santri",
        "gender",
        "tanggal_lhr",
        "kota_lhr",
        "nama_ortu",
        "alamat_ortu",
        "hp",
        "email",
        "password",
        "tanggal_masuk",
        "aktif",
    ];

    // Relationships
    public function santriKemajuans(){
        // having many kemajuans
        return $this->hasMany(Kemajuan::class, 'FK_Id_santri', 'id_santri');
    }
}
