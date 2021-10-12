<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailkemajuan extends Model
{
    protected $table = 'detailkemajuan';

    public function bab()
    {
        return $this->belongsTo(Bab::class, 'id_bab', 'id');
    }

    public function kemajuan()
    {
        return $this->belongsTo(Kemajuan::class, 'id_kemajuan', 'id');
    }
}
