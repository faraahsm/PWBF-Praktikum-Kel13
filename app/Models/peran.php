<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peran extends Model
{
    protected $table = 'peran';

    public function peran()
    {
        return $this->hasMany(Peran::class, 'id_peran', 'id');
    }
}
