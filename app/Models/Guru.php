<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Guru extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'guru';
    protected $primaryKey = 'id_guru';
    protected $fillable = [
        "nama_guru",
        "gender",
        "hp",
        "email",
        "password",
        "aktif",
    ];

    // Relationships
    
}
