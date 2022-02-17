<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\room;
use App\Models\guest_room;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session as FacadesSession;

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
                $req->cost = 1000000;
            $startDate = Carbon::parse($req->startDate);
            $endDate = Carbon::parse($req->ednDate);
            $found = room::where('floor','>=',$req->floor)
            ->where('capacity','>=',$req->capacity)
            ->where('price','<=',$req->cost)->get();
            foreach ($found as $item) {
                // dd($item);
                foreach($item->reserve as $one){
                    // echo $one->reserve_start;
                    $reserve_start = Carbon::parse($one->reserve_start);
                    $reserve_end = Carbon::parse($one->reserve_end);
                    // echo "<br>";echo $startDate;echo "<br>";
                    // echo $endDate;echo "<br>";
                    // echo $reserve_start;echo "<br>";
                    // echo $reserve_end;echo "<br>";
                    if($startDate->gte($reserve_start) && $startDate->lte($reserve_end)){
                        $found->forget($item->id);
                        break;
                    }
                    if($endDate->gte($reserve_start)&& $endDate->lte($reserve_end)){
                        $found->forget($item->id);
                        break;
                    }
                }
            }
            return view('index',['rooms'=>$found]);        
        }else if($req->action == "reserve"){
            guest_room::create([
                'guest_id' => FacadesSession::get('id'),
                'room_id' => $req->id,
                'reserve_start'=>$req->startDate,
                'reserve_end'=>$req->endDate
            ]);
            return redirect('/');
        }
    }
    public function select(Request $req){
        $room = room::find($req->id);
        return view('index',['room'=>$room]);
    }
}
