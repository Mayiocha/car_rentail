<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rentail extends Model
{
    protected $table = "rentails";
    protected $primaryKey = "id";

    protected $fillable = [
        'user_id',
        'car_id',
        'drive_id',
        'pickup_date',
        'return_date',
        'total_amount',
        'status'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class, 'car_id', 'id');
    }

    public function driver(): BelongsTo
    {
        return $this->belongsTo(Drive::class, 'drive_id', 'id');
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class, 'rentail_id', 'id');
    }
}