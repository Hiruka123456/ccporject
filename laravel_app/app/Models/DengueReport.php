<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DengueReport extends Model
{
    protected $fillable = [
        'user_id',
        'description',
        'photo_path',
        'latitude',
        'longitude'
    ];
}

