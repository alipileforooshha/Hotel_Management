<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guest_room extends Model
{
    use HasFactory;
    protected $fillable = [
        'guest_id',
        'room_id',
        'reserve_start',
        'reserve_end'
    ];
}
