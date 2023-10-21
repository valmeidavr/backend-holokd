<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventaryHolokd extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'user_id',
        'holokd_id',
        'type_card',
        'coins',
        'xp',
        'nivel',
        'strengh',
        'speed',
        'energy',
        'status'
    ];
}
