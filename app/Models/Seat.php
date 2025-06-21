<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;

    protected $fillable = [
        'trip_id',
        'seat_code',
        'is_available'
    ];

    protected $casts = [
        'is_available' => 'boolean'
    ];

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
} 