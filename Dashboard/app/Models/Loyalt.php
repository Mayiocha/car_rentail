<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loyalt extends Model
{
    protected $table="loyaltys";
    protected $primaryKey="id";
    protected $fillable=[
        'name',
        'main_points',
        'discount_percentage',
        'free_extra_hours'
    ];
}
