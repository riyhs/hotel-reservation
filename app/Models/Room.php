<?php

namespace App\Models;

use App\Models\RoomSpec;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function roomSpec()
    {
        return $this->belongsTo(RoomSpec::class, 'spec_id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
