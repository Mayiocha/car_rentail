<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Car extends Model
{
    protected $table = "cars";
    protected $primaryKey = "id";

    protected $fillable = [
    'model',
    'year',
    'color',
    'license_plate',
    'mileage',
    'lat',
    'lng',
    'is_premiun',
    'rentail_count',
    'daily_rate',
    'status',
    'brand_id'
    ];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function rentals(): HasMany
    {
        return $this->hasMany(Rentail::class, 'car_id', 'id');
    }
}