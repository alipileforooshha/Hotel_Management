<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\room;
use App\Models\guest;

class guest_room extends Model
{
    use HasFactory;

    public function room(){
        return $this->belongsTo(room::class);
    }
    public function guest(){
        return $this->belongsTo(guest::class);
    }
    protected $fillable = [
        'guest_id',
        'room_id',
        'reserve_start',
        'reserve_end'
    ];
}
