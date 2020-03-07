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
            "trainsData"=> array(
                    'from_city'         => $rec->input("from_city"),
                    'to_city'           => $rec->input("to_city"),
                    'date'              => $rec->input("date"),
                    'adult'             => $rec->input("adult"),
                    'child'             => $rec->input("child"),
                    'infant'            => $rec->input("infant"),
                    'duration'          => $rec->input("duration"),
                    'company_name'      => $rec->input("company_name"),
                    'company_logo'      => $rec->input("company_logo"),
                    'trainNumber'       => $rec->input("trainNumber"),
                ),
            "adult"=> array(
                    'first_name'        => $rec->input("first_name"),
                    'last_name'         => $rec->input("last_name"),
                    'national_code'     => $rec->input("national_code"),
                    'phone_number'      => $rec->input("phone_number"),
                    'email'             => $rec->input("email"),
                    'city'              => $rec->input("city"),
                    'is_tourist'        => 0,
                    'gender'            => $rec->input("Sir_Madam"),
                    'birthDate'=> array(
                        "day"   => $rec->input("dd"),
                        "month" => $rec->input("mm"),
                        "year"  => $rec->input("yy")
                    )
            ),
            "child"=> "",
            "infant"=> ""
                
        )));
        // {
        //     "token":"mzoc1CEq401565108119FTd7QvbGea",
        //     "user_token":"DEsFVekRIkrvfbfiuULvzSdvLL6BwvkzGg0LRJDtySA7a0xsYladMyxJ2gcLv8LNt74ihjAxz9RvXE7bymLm8op47Oqqiur0",
        //     "agentPay": "0",
        //     "redirectPath": "http://recepshen.com/trains/reserve/confirmation",
        //     "trainsData": {
        //       "from_city": "تهران",
        //       "to_city": "مشهد",
        //       "date": "1398/9/7",
        //       "adult": 2800000,
        //       "child": 2000000,
        //       "infant": 1800000,
        //       "duration": "05:45",
        //       "company_name": "وارش",
        //       "company_logo": "http://recepshen.ir/images/icons/15835515806240_sample.jpg",
        //       "trainNumber": "319"
        //     },
        //     "adult":[
        //         { 
        //         "first_name":"عرفان",
        //         "last_name":"ابراهیمی",
        //         "is_tourist":"0",
        //         "national_code":"2081234567",
        //         "phone_number":"09039622999",
        //         "email":"mhml1367@gmail.com",
        //         "gender":"M",
        //         "birthDate": {
        //           "day": 5,
        //           "month": 2,
        //           "year": 1370
        //         }
        //         }
        //       ],
        //     "child": [
        //       {}
        //     ],
        //     "infant": [
        //       {}
        //     ]
        // }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Accept:application/json'));


        $response = json_decode(curl_exec($ch));
        // dd($response);
        return response()->json($response);
    }

}
