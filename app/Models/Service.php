<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'service',
        'description',
        'price',
        'service_image',
        'discount'
    ];

    public function bookings()
    {
        return $this->belongsToMany(Booking::class);
    }

}
