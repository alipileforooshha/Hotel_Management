<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\hall;

class guest_hall extends Model
{
    public function guest(){
        return $this->belongsTo(hall::class);
    }
    protected $fillable = [
        'guest_id',
        'hall_id',
        'reserve_start',
        'reserve_end'
    ];
    use HasFactory;
}
