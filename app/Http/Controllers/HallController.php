<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HallController extends Controller
{
    public function index(){
        return view('hall');
    }
    public function checkout(){
        return view('hall_checkout');
    }
}
