<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'saloon_id',
        'saloon_owner',
        'u_phone',
        's_provider',
        'date',
        'notes',
        'paid',
        'payment',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function saloon()
    {
        return $this->belongsTo(Saloon::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function details()
    {
        return $this->hasMany(Detail::class);
    }

    public function visa()
    {
        return $this->hasOne(Visa::class);
    }
}
