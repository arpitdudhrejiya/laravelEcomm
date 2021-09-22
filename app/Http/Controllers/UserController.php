<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user = User::where(['email'=>$req->email])->first();

        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Email and Password is Not Matched"; 
        }
        else
        {
            $req->session()->put('user',$user); 
            return redirect('/'); 
        }
    }

    function register(Request $req)
    {
        if(session()->has('user'))
        {
            return redirect('/');
        }
        else
        {
            $user = new User;
            $user->name = $req->name;
            $user->email = $req->email;
            $user->password = Hash::make($req->password);
            $user->save();

            return redirect('/login');

        }
    }
}
