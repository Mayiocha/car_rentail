<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table="payments";
    protected $primaryKey="id";
    protected $fillable=[
        'rentail_id',
        'amount',
        'payment_method',
        'transition_id',
        'status',
        'payment_date'
    ];
}
