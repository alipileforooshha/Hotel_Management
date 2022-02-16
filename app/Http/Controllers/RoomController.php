<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rooms;

class RoomController extends Controller
{
    public function index(){
        return view('index');
    }
    public function checkout(){
        return view('room_checkout');
    }
    public function renewal(){
        return view('Room_renewal');
    }
    public function search_submit(Request $req){
        if($req->action == "search"){
            if(!isset($req->floor))
                $req->floor = 0;
            if(!isset($req->capaity))
                $req->capacity = 0;
            if(!isset($req->startDate))
                $req->startDate = 0;        
            if(!isset($req->endDate))
                $req->endDate = 0;        
            if(!isset($req->cost))
                $req->cost = 0;
            $found = rooms::where('floor','>=',$req->floor)
            ->where('capacity','>=',$req->capacity)
            ->where('price','<=',$req->cost)->get();
            return view('index',['rooms'=>$found]);        
        }else if($req->action == "reserve"){

        }
    }
}
