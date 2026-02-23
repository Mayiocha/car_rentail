<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table="cars";
    protected $primaryKey="id";
    protected $fillable=[
        'model',
        'year',
        'color',
        'license_plate',
        'mileage',
        'lat',
        'mlng',
        'is_premiun',
        'rentail_count',
        'daily_rate',
        'status',
        'brand_id',
        'model'
    ];
}
