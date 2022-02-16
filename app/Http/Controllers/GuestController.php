<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guests;

class GuestController extends Controller
{
    public function create(Request $req){
        if($req->gender == 'مرد'){
            $req->gender = 1;
        }elseif($req->gender == 'زن'){
            $req->gender = 0;
        }
        guests::create([
            'fullname' => $req->fullname,
            'age' => $req->age,
            'gender' => $req->gender,
            'ssn' => $req->ssn,
            'phone' => $req->number,
        ]);
        return redirect('/');
    }
}
