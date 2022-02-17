<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class GuestController extends Controller
{
    public function create(Request $req){
        $validated = $req->validate([
            'fullname' => 'required',
            'ssn' => 'required',
            'number' => 'required'
        ]);
        if($req->gender == 'مرد'){
            $req->gender = 1;
        }elseif($req->gender == 'زن'){
            $req->gender = 0;
        }
        $guest = guest::create([
            'fullname' => $req->fullname,
            'age' => $req->age,
            'gender' => $req->gender,
            'ssn' => $req->ssn,
            'phone' => $req->number,
        ]);
        Session::put('id',$guest->id);
        Session::put('fullname',$guest->fullname);
        Session::put('age',$guest->age);
        Session::put('gender',$guest->gender);
        Session::put('ssn',$guest->ssn);
        Session::put('number',$guest->phone);
        return back();
    }
}
