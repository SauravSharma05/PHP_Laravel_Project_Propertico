<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function contact()
    {
        return view('contact');
    }
    public function agents()
    {
        return view('agents');
    }

}

