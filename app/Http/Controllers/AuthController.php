<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function doRegister(Request $request){
        $validated = $request->validated([
            'name' => 'required',
            'firstName' => 'required',
            'streetNumber' => 'required',
            'streetName' => 'required',
            'postcode' => 'required',
            'city' => 'required',
            'number' => 'required',
            'password' => 'required',
            'passwordCheck' => 'required|confirmed|min:8',
        ]);

        Client::create($validated);

        return to_route('login');
    }

    public function login(){
        return view('auth.login');
    }

    public function clientDashboard(){
        return view('clients.clientDashboard');
    }
}
