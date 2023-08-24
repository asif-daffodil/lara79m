<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function userPage()
    {
        return "Hello Mama";
    }

    function userFunc()
    {
        return "Hi Mama";
    }

    function userId($id, $name = "Naam nai")
    {
        return "$id er naam holo $name";
    }
}
