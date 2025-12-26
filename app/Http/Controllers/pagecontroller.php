<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pagecontroller extends Controller
{
   public function home()
     {
    return view('home');
     }

public function login() 
{
    return view('login');
}

}
