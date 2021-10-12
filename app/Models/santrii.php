<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class santrii extends Model
{
    protected $table = 'santri';

    public function kemajuan()
    {
        return $this->hasMany(Kemajuan::class,'id_santri','id');
    }
}
