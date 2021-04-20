<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forzadata extends Model
{
    use HasFactory;
    protected $fillable=[
        'year',
        'manufacturer',
        'model',
        'value',
        'division',
        'pi',
        'engine',
        'engine_layout',
        'drivetrain',
        'power_kw',
        'touge_nm',
        'weight_kg',
        'top_speed_kph',
        'lap_time',
    ];
}
