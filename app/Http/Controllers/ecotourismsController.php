<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Filesystem\Cache;

class ecotourismsController extends Controller
{
    public function index($city1 = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://recepshen.ir/api/boomgardi/list");
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array(
            'city_name_en'=> $city1,
            'token' => 'mzoc1CEq401565108119FTd7QvbGea',
        )));
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
        ]);

        $response = json_decode(curl_exec($ch));
        $rec = $response->data;


        $city = city();
        $hotelTypes = hotelTypes();
        $hotelSpecifications = hotelSpecifications();
        return view('ecotourism/ecotourisms',compact('rec','city','hotelTypes','hotelSpecifications'));

    }
    
    public function Hotel($Hotels)
    {
    if (request()->input('DateFrom') == null) {
        $from = "";
        $to = "";
    }else{
        $from = request()->input('DateFrom');
        $to = request()->input('DateEnd');
    }

    $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://recepshen.ir/api/boomgardi/rooms");
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array(
            'name_en' => $Hotels,
            'from' => $from,
            'to' => $to,
            'token' => 'mzoc1CEq401565108119FTd7QvbGea',
        )));
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
        ]);

        $response = json_decode(curl_exec($ch));
        // dd($response);
        $rec = $response->data;
        return view('ecotourism/ecotourism')->with(compact('rec'));
    }
    
    public function reserve(Request $rec)
    {
        $ch = curl_init('http://recepshen.ir/api/reserve');
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array(
            'hotel_id' => $rec->input("hotel_id"),
            'room_id' => $rec->input("room_id"),
            'contract_id' => $rec->input("contracts"),
            'start_date' => $rec->input("start_date"),
            'end_date' => $rec->input("end_date"),
            'agentPay' => "0",
            'redirectPath' => "http://recepshen.com/hotels/reserve/confirmation",
            'user_token' => "DEsFVekRIkrvfbfiuULvzSdvLL6BwvkzGg0LRJDtySA7a0xsYladMyxJ2gcLv8LNt74ihjAxz9RvXE7bymLm8op47Oqqiur0",
            'token' => 'mzoc1CEq401565108119FTd7QvbGea',
            "guests"=> array(
                array(
                    'first_name'        => $rec->input("first_name"),
                    'last_name'         => $rec->input("last_name"),
                    'national_code'     => $rec->input("national_code"),
                    'phone_number'      => $rec->input("phone_number"),
                    'city'              => $rec->input("city"),
                    'is_tourist'        => 1,
                    'gender'            => $rec->input("Sir_Madam"),
                )
            )
                
        )));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Accept:application/json'));


        $response = json_decode(curl_exec($ch));
        // dd($response);
        return response()->json($response);
    }
    public function confirmation()
    {
        $factor = request()->input('factorNumber');
        if (isset($factor)){
           
        $ch = curl_init('http://recepshen.ir/api/reserves/confirmation');
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array(
            'payed' => request()->input('status'),
            'factorNumber' => request()->input('factorNumber'),
            'user_token' => "DEsFVekRIkrvfbfiuULvzSdvLL6BwvkzGg0LRJDtySA7a0xsYladMyxJ2gcLv8LNt74ihjAxz9RvXE7bymLm8op47Oqqiur0",
            'token' => 'mzoc1CEq401565108119FTd7QvbGea',
                
        )));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Accept:application/json'));

        $response = json_decode(curl_exec($ch));
        
        $res = $response->info;
    }else{
        $res = "1"; 
    }
        return view('hotel/confirmation')->with(compact('res'));
    }
}
