<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Loyalt extends Model
{
    protected $table = "loyaltys";
    protected $primaryKey = "id";

    protected $fillable = [
        'name',
        'main_points',
        'discount_percentage',
        'free_extra_hours'
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'loyalty_level_id', 'id');
    }
}