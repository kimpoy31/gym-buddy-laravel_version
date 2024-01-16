<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthManager extends Controller{

    // Login Controllers here ########################

    function login(){
        return view('login');
    }

    function loginPost(Request $request){
        // validate if data are provided
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email','password');

        // If success redirect to home ("/")
        if(Auth::attempt($credentials)){
            return redirect()->intended(route("home"));
        }

        // return error if invalid data
        return redirect(route("login"))->with("error","Login details are not valid");
    } 

    // Registraion Controllers here ########################
    
    function registration(){
        return view('registration');
    }

    function registrationPost(Request $request){
        // validate if data are provided
        $request->validate([
        'name' => 'required',
        'email' => 'required|emailuniqu:users',
        'password' => 'required',
        ]);
        
        $data["name"] = $request->name;
        $data["email"] = $request->name;
        $data["password"] = $request->name;

        
        }
    }
