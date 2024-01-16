<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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

        // Check if email or password is empty
        if (empty($request->email) || empty($request->password)) {
        return redirect(route("login"))->with("error", "Email and password are required");
        }

        $credentials = $request->only('email','password');

        // If success redirect to home ("/")
        if(Auth::attempt($credentials)){
            return redirect()->intended(route("home"));
        }

        // Clear old input values
        $request->session()->forget(['email', 'password']);

        // return error if invalid data
        return redirect(route("login"))->with("error","Login credentials are invalid");
    } 

    // RegistraTion Controllers here ########################
    
    function registration(){
        return view('registration');
    }

    function registrationPost(Request $request){
        // validate if data are provided
        $request->validate([
        'name' => 'required',
        'email' => 'required | email | unique:users',
        'password' => 'required',
        ]);
        
        $data["name"] = $request->name;
        $data["email"] = $request->email;
        $data["password"] = Hash::make($request->password);

        $user = User::create($data);

        if(!$user){
            return redirect(route("registration"))->with("error","Registration details are not valid");
        }

        return redirect(route("login"))->with("success","Registration successful");
    }

    function logout(){
        Session::flush();
        Auth::logout();

        return redirect(route("login"));
    }
}
