<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    function index(){
        return view('loginPage');
    }

    function nextRoute(){
          return view('movieList');
    }
}
