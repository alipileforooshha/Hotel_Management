<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\guest_hall;

class hall extends Model
{
    public function reserve(){
        return $this->hasMany(guest_hall::class);
    }
    use HasFactory;
}
