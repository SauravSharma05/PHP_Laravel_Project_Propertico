<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Property;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function dashh()
    {
        return view('adm.dashh');
    }
    public function userlist()
    {
        return view('adm.userlist');
    }



}
