<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'inventary_holokd_id',     
        'event_type',
        'event_subcategory',
        'event_title',
        'event_subtitle',
        'event_equipment',
        'timezone',
        'event_duration',
        'viewing_duration',
        'location_id',
        'geo_longitude',
        'geo_latitude',
        'device',
        'status',
        'ip'
    ];
}
