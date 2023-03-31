<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeospasialModel extends Model
{
    protected $table = 'geospasial';
    protected $fillable = [
        'nama',
        'latitude',
        'longitude'
    ];
}
