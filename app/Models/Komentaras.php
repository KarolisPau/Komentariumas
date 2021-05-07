<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentaras extends Model
{
    use HasFactory;

    protected $table = 'komentaras';
    protected $fillable = [
        'plakatas_id',
        'user_id',
        'comment',
    ];
}
