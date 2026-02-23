<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rentail extends Model
{
    protected $table="rentails";
    protected $primaryKey="id";
    protected $fillable=[
        'user_id',
        'car_id',
        'drive_id',
        'pickup_date',
        'return_date',
        'total_amount',
        'status'
    ];
}
