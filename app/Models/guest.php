<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\guest_room;

class guest extends Model
{
    use HasFactory;
    public function reserve(){
        return $this->hasMany(guest_room::class);
    }
    protected $fillable = [
        'fullname',
        'age',
        'gender',
        'ssn',
        'phone',
    ];
}
