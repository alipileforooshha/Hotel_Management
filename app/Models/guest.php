<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guest extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname',
        'age',
        'gender',
        'ssn',
        'phone',
    ];
}