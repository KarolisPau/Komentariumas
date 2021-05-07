<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plakatas extends Model
{
    use HasFactory;
    
    protected $table = 'plakatas';
    protected $fillable = [
        'title',
        'header',
        'footer',
        'img',
        'user_id'
    ];
}
