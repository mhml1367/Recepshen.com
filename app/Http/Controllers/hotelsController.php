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
        $rec = $response->data;
        return view('hotel')->with(compact('rec'));
    }
}
