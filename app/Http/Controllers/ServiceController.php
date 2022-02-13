<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function special_card(){
        return view('special_card');
    }
    public function child_care(){
        return view('child_care');
    }
    public function cafe_order(){
        return view('cafe_order');
    }
}
