<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hall;
use App\Models\guest_hall;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class HallController extends Controller
{
    public function index(){
        return view('hall');
    }
    public function search_submit(Request $req){
        if($req->action == "search"){
            $validated = $req->validate([
                'startDate' => 'required',
                'endDate' => 'required',
            ]);
            if(!isset($req->capaity))
                $req->capacity = 0;
            if(!isset($req->startDate))
                $req->startDate = 0;        
            if(!isset($req->endDate))
                $req->endDate = 0;        
            if(!isset($req->cost))
                $req->cost = 1000000;
            Session::put('hall_reserve_start',$req->startDate);
            Session::put('hall_reserve_end',$req->endDate);
            $startDate = Carbon::parse($req->startDate);
            $endDate = Carbon::parse($req->endDate);
            $found = hall::where('capacity','>=',$req->capacity)->
            where('cost','<=',$req->cost)->get();
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
            return view('hall',['halls'=>$final]);     
        }elseif($req->action == "reserve"){
            $validated = $req->validate([
                'startDate' => 'required',
                'endDate' => 'required',
                'id' => 'required'
            ]);
            guest_hall::create([
                'guest_id' => Session::get('id'),
                'hall_id' => $req->id,
                'reserve_start'=>$req->startDate,
                'reserve_end'=>$req->endDate
            ]);
            return redirect('/Halls');
        }elseif($req->action == "cancel"){
            $reserves = guest_hall::all();
            return view('hall',['reserves'=>$reserves]);
        }   
    }
    public function select(Request $req){
        $hall = hall::find($req->id);
        return view('hall',['hall'=>$hall]);
    }
    public function delete(Request $req){
        $reserve = guest_hall::find($req->id);
        $reserve->delete();
        return redirect('/');
    }
}
