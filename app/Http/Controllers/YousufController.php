<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YousufController extends Controller
{
    function yousufFunc($age = 0)
    {
        $ashraf = ["coder", "programmer", "young", "legend"];
        return view("yousuf", compact("age", "ashraf"));
    }

    function molla()
    {
        return view("molla");
    }

    function nabi()
    {
        return view("nabiVai");
    }
}
