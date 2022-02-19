<?php

namespace App\Http\Controllers;

use App\Models\guest;
use Illuminate\Http\Request;
use App\Models\room;
use App\Models\guest_room;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class RoomController extends Controller
{
    public function index(){
        return view('index');
    }
    public function checkout(){
        return view('room_checkout');
    }
    public function search_submit(Request $req){
        if($req->action == "search"){
            $validated = $req->validate([
                'startDate' => 'required',
                'endDate' => 'required',
            ]);
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
            Session::put('reserve_start',$req->startDate);
            Session::put('reserve_end',$req->endDate);
            $startDate = Carbon::parse($req->startDate);
            $endDate = Carbon::parse($req->endDate);
            $found = room::where('floor','>=',$req->floor)
            ->where('capacity','>=',$req->capacity)
            ->where('price','<=',$req->cost)->get();
            // dd($found);
            $final = collect();
            // echo "<br>";echo $found;echo "<br>";    
            foreach ($found as $item) {
                // dd($item);
                // echo "<br>";echo $item->reserve->count();echo "<br>";
                if($item->reserve->count() == 0){
                    // echo "hii";
                    $final->push($item);
                }
                
                foreach($item->reserve as $one){
                    // echo "<br>";echo $one;echo "<br>";
                    // echo $one->reserve_start;
                    $reserve_start = Carbon::parse($one->reserve_start);
                    $reserve_end = Carbon::parse($one->reserve_end);
                    // echo "<br>";echo $startDate;echo "<br>";
                    // echo $endDate;echo "<br>";
                    // echo $reserve_start;echo "<br>";
                    // echo $reserve_end;echo "<br>";
                    if($startDate->gte($reserve_start) && $startDate->lte($reserve_end)){
                        // $found->forget($item->id);
                        // echo "<br>";echo $item->id;echo "<br>";
                        break;
                    }elseif($endDate->gte($reserve_start)&& $endDate->lte($reserve_end)){
                        // $found->forget($item->id);
                        // echo "<br>";echo $item->id;echo "<br>";
                        break;
                    }else{
                        echo "hi";
                        $final->push($item);
                    }
                }
            }
            // echo "<br>";echo $final;echo "<br>";
            return view('index',['rooms'=>$final]);        
        }else if($req->action == "reserve"){
            $validated = $req->validate([
                'startDate' => 'required',
                'endDate' => 'required',
                'id' => 'required'
            ]);
            guest_room::create([
                'guest_id' => Session::get('id'),
                'room_id' => $req->id,
                'reserve_start'=>$req->startDate,
                'reserve_end'=>$req->endDate
            ]);
            return redirect('/');
        }
    }
    public function select(Request $req){
        $room = room::find($req->id);
        if($req->action == 'index'){
            return view('index',['room'=>$room]);
        }elseif($req->action == 'renewal'){
            $guest = guest::where('ssn',$req->ssn)->first();
            $reserve = guest_room::where('room_id',$req->id)->
            where('guest_id',$guest->id)->first();
            if($guest->reserve->count() != 0){
                return view('Room_renewal',['room'=>$room,'reserve'=>$reserve,'guest'=>$guest]);
            }else{
                return view('Room_renewal');
            }
        }
    }
    public function renewal(Request $req){
        $reserve = guest_room::where('guest_id',$req->guest_id)->
        where('room_id',$req->id)->first();
        $reserve->reserve_end = $req->reserve_end;
        $reserve->save();
        return view('Room_renewal');        
    }
}
