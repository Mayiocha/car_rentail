<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    protected $table = "payments";
    protected $primaryKey = "id";

    protected $fillable = [
        'rentail_id',
        'amount',
        'payment_method',
        'transition_id',
        'status',
        'payment_date'
    ];

    public function rentail(): BelongsTo
    {
        return $this->belongsTo(Rentail::class, 'rentail_id', 'id');
    }
}