<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Drive extends Model
{
    protected $table = "drivers";
    protected $primaryKey = "id";

    protected $fillable = [
        'license_number',
        'license_img',
        'user_id'
    ];

    public function rentails(): HasMany
    {
        return $this->hasMany(Rentail::class, 'drive_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}