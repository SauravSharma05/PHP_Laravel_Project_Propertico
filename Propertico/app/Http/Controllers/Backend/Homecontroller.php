<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
   
    public function GetPropertyData()
    {
        // dd("inside funciton");
        $property = Property::all();
        // echo $users;
        //    echo json_encode($users);
            return response()->json($property);
            // return response()->json([$users,$products]);

        // dd($users);
    }
}
