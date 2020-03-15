<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Filesystem\Cache;

class trainController extends Controller
{
    public function index()
    {
        $city = city();
        return view('train/trains',compact('city'));
    }

    public function reserve(Request $rec)
    {
        $ch = curl_init('http://recepshen.ir/api/trains/reserve');
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array(
            'agentPay' => "0",
            'redirectPath' => "http://recepshen.com/trains/reserve/confirmation",
            'user_token' => "DEsFVekRIkrvfbfiuULvzSdvLL6BwvkzGg0LRJDtySA7a0xsYladMyxJ2gcLv8LNt74ihjAxz9RvXE7bymLm8op47Oqqiur0",
            'token' => 'mzoc1CEq401565108119FTd7QvbGea',
            "trainData"=> array(
                    'RailwayNumber'     => (int) $rec->input("railwaynumber"),
                    'start_time'        => $rec->input("start_time"),
                    'date'              => $rec->input("date"),
                    'end_time'          => $rec->input("end_time"),
                    'ticket_id'         => (int) $rec->input("ticket_id"),
                    'adult'             => (int) $rec->input("adult"),
                    'child'             => (int)$rec->input("child"),
                    'infant'            => (int) $rec->input("infant"),
                    'from_city'         => $rec->input("from_city"),
                    'to_city'           => $rec->input("to_city"),
                    'company_name'      => $rec->input("company_name"),
                ),
            "guests"=> array(
                "adults"=> array(
                    array(
                        'first_name'        => $rec->input("first_name"),
                        'last_name'         => $rec->input("last_name"),
                        'is_tourist'        => 0,
                        'national_code'     => $rec->input("national_code"),
                        'phone_number'      => $rec->input("phone_number"),
                        'gender'            => $rec->input("Sir_Madam"),
                        'country'           => "ایران",
                        'email'             => $rec->input("email"),
                        'birthDate'         => $rec->input("yy")."/".$rec->input("mm")."/".$rec->input("dd")
                    )
                ),
                "childs"=>  array(),
                "infants"=>  array(),
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
        $status = request()->input('status');
        $rest = "";
        if (isset($factor) && isset($status)){
           
            $ch = curl_init('http://recepshen.ir/api/trains/reserves/confirmation');
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array(
                'payed' => request()->input('status'),
                'factorNumber' => request()->input('factorNumber'),
                'user_token' => "DEsFVekRIkrvfbfiuULvzSdvLL6BwvkzGg0LRJDtySA7a0xsYladMyxJ2gcLv8LNt74ihjAxz9RvXE7bymLm8op47Oqqiur0",
                'token' => 'mzoc1CEq401565108119FTd7QvbGea',
                    
            )));

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Accept:application/json'));

            $response = json_decode(curl_exec($ch));
            // dd($response);
            $rest = $response;
        }

        return view('train/confirmation')->with(compact('rest'));
    }
}
