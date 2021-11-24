<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelSantri extends Model
{
    use HasFactory;
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
        "aktif"
    ];
}
