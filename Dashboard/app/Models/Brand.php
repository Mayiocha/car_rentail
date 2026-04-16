<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
    protected $table = "brands";
    protected $primaryKey = "id";

    protected $fillable = [
        'name',
        'img'
    ];

    public function cars(): HasMany
    {
        return $this->hasMany(Car::class, 'brand_id', 'id');
    }
}