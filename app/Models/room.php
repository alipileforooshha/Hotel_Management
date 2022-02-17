<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\guest;

class room extends Model
{
    public function reserve(){
        return $this->hasMany(guest_room::class);
    }
    use HasFactory;
}
