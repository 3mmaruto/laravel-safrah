<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = [
        'company_name',
        'from',
        'to',
        'rating',
        'total_seats',
        'available_seats',
        'ac',
        'price',
        'trip_date',
        'location_details',
        'supervisor_name',
        'supervisor_phone',
    ];
    //
    public function seats()
    {
        return $this->hasMany(Seat::class);
    }
}
