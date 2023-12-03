<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Property;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{

    public function index()
    {
        //Eloquent queries
         $property = Property::all();
        //  $products = Product::where('id','=',1);
        //  $products = Product::where('id',3)->get();
        //  $products = Product::where('id',3)->get('quantity');
        //  $products = Product::where('id',3)->first(['quantity','id']);
        //  dd($products);
        return view('home',compact('property'));
    }

    public function contact()
    {
        return view('contact');
    }
    public function agents()
    {
        return view('agents');
    }
  

    public function contactus(Request $request)
    {
            $query = new Contact;
            $query->fname = $request->fname;
            $query->lname = $request->lname;
            $query->message = $request->message;
            $query->subject = $request->subject;
            $query->email = $request->email;
            $query->save();

    }


}

