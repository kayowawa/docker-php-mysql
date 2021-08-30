<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{


    function index(Request $req) 
    {
        return view('welcome');
    }

    function test() 
    {
        return view('test');
    }

}
