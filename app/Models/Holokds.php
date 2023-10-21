<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Holokds extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'language',
        'user_id',
        'name',
        'description',
        'type_card',
        'category',
        'urlImage',
        'urlAnimation',
        'coins',
        'xp',
        'nivel',
        'strengh',
        'speed',
        'energy',
        'status'
    ];

    public function User() {
        return $this->belongsTo(User::class);
    }
}
