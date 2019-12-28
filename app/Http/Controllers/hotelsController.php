<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hotelsController extends Controller
{
    public function index()
    {

        
        $city = city();
        $hotelTypes = hotelTypes();
        $hotelSpecifications = hotelSpecifications();
        return view('hotels')->with(compact('city','hotelTypes','hotelSpecifications'));
    }
    
    public function Hotel(Request $rec,$Hotels,$IDHotel)
    {
    
        $key = $Hotels."-".$IDHotel;
        if(env('Cache')){
            Cache::forget($key);
        }
        if (Cache::has($key)) {
            $H = Cache::store('file')->get($key);
            return $H;
        }
    
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://recepshen.ir/api/fetchRooms");
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array(
            'token' => 'mzoc1CEq401565108119FTd7QvbGea',
            'hotel_id' => $IDHotel,
            'from' => $rec->input('DateFrom'),
            'to' => $rec->input('DateEnd'),
        )));
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
        ]);
    
        $response = json_decode(curl_exec($ch));

        if ($response) {
            Cache::store('file')->put($key, $response, env('CacheTime'));
        }

        $city = city();
        $hotelTypes = hotelTypes();
        $hotelSpecifications = hotelSpecifications();
        $hotel = $response->data;
        return view('hotel')->with(compact('hotel','city','hotelTypes','hotelSpecifications'));
    }
}
