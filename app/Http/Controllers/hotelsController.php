<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hotelsController extends Controller
{
    public function index()
    {


        return view('/hotels');
    }
}
