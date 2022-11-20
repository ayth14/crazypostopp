<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerShow(){
        return view('auth.register');
    }

    public function create(Request $request){
        $formFields = $request->validate([
            'firstName' => "required|string",
            'lastName' => "required|string",
            'userName' => "required",
            'email' => "required|email",
            'password' => "required|regex:/^[a-zA-Z0-9!@#$%^&*]{8,16}$/",
        ]);


    }
}
