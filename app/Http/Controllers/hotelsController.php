<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Filesystem\Cache;

class hotelsController extends Controller
{
    public function index()
    {
        $city = city();
        $hotelTypes = hotelTypes();
        $hotelSpecifications = hotelSpecifications();
        return view('hotels')->with(compact('city','hotelTypes','hotelSpecifications'));
    }
    
    public function Hotel($Hotels,$IDHotel)
    {
    if (request()->input('DateFrom') == null) {
        $from = "";
        $to = "";
    }else{
        $from = request()->input('DateFrom');
        $to = request()->input('DateEnd');
    }

    $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://recepshen.ir/api/fetchRooms");
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array(
            'hotel_id' => $IDHotel,
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
        return view('hotel')->with(compact('rec'));
    }
    
    public function reserve(Request $rec)
    {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://recepshen.ir/api/reserve");
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array(
            'hotel_id' => $rec->input("hotel_id"),
            'room_id' => $rec->input("room_id"),
            'contract_id' => $rec->input("contracts"),
            'start_date' => $rec->input("start_date"),
            'end_date' => $rec->input("end_date"),
            'agentPay' => "0",
            'user_token' => "DEsFVekRIkrvfbfiuULvzSdvLL6BwvkzGg0LRJDtySA7a0xsYladMyxJ2gcLv8LNt74ihjAxz9RvXE7bymLm8op47Oqqiur0",
            'token' => 'mzoc1CEq401565108119FTd7QvbGea',
            "guests"=>
                [
                        "first_name"=>$rec->input("first_name"),
                        "last_name"=>$rec->input("last_name"),
                        "national_code"=>$rec->input("national_code"),
                        "phone_number"=>$rec->input("phone_number"),
                        "city"=>$rec->input("city"),
                        "gender"=>$rec->input("Sir_Madam"),
                        "is_tourist "=>"0"
                ]
        )));
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
        ]);

        $response = json_decode(curl_exec($ch));
        dd($response);
        $res = $response->data;
        return view('hotel')->with(compact('rec'));
    }
}
