<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guest;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;

class GuestController extends Controller
{
    public function create(Request $req){
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
        FacadesSession::put('id',$guest->id);
        FacadesSession::put('fullname',$guest->fullname);
        FacadesSession::put('age',$guest->age);
        FacadesSession::put('gender',$guest->gender);
        FacadesSession::put('ssn',$guest->ssn);
        FacadesSession::put('number',$guest->phone);
        return redirect('/');
    }
}
