<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Drive extends Model
{
    protected $table="drivers";
    protected $primaryKey="id";
    protected $fillable=[
        'name',
        'license_number',
        'discount_percentage',
        'free_extra_hours'
    ];
}
