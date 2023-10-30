<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Authcontroller extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function store(Request $request)
    {
            $user = new User;
            $user->name = $request->name;
            $user->mobile = $request->mobile;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->save();

    }

    public function login()
    {
        return view('login');
    }
    public function validate_login(Request $request)
    {
        $request->validate(['email'=>'required','password'=>'required']);
        $credential = $request->only('email','password');

        if(Auth::attempt($credential))
        {
            if(Auth::user()->role_as == 1)
            {

                return redirect('/adminhome');
            }
            else
            {
                return redirect('/home');
            }
        }
        else
        {
            return redirect('/login');
        }
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/login');
    }


}
