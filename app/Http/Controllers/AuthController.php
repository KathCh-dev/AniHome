<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Admin;
use \Illuminate\Support\Facades\Auth;
use function Laravel\Prompts\error;
use Hash;
use function PHPUnit\Framework\returnArgument;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function clientLogin(){
        return view('auth.clientLogin');
    }

    public function clientDoLogin(Request $request){
        $request->validate([
            'email' => 'required | email',
            'password' => 'required',
        ]);

        $client = Client::where('client_email', $request->input('email'))->first();

        if($client && Hash::check($request->input('password'), $client->client_password)){
            //on autorise l'authentification
            Auth::login($client);
            // on démarre une nouvelle session pour éviter l'usurpation de token
            $request->session()->regenerate();
            //on redirige notre client vers son dashboard perso
            return redirect()->intended(route('clientDashboard', ['client_id' => $client->client_id]));
        }

        return back()->withErrors([
            'email' => "L'email ou le mot de passe est invalide." 
        ]);
    }

        public function adminLogin(){
        return view('auth.adminLogin');
        }

        public function adminDoLogin(Request $request){
        $request->validate([
            'email' => 'required | email',
            'password' => 'required',
        ]);

        $admin = Admin::where('admin_email', $request->input('email'))->first();

        if($admin && Hash::check($request->input('password'), $admin->admin_password)){
            Auth::login($admin);
            $request->session()->regenerate();
            return redirect()->intended(route('adminDashboard'));
        }

        return back()->withErrors([
            'email' => "L'email ou le mot de passe est invalide." 
        ]);
    }

    public function doRegister(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'firstName' => 'required',
            'streetNumber' => 'required',
            'streetName' => 'required',
            'postcode' => 'required',
            'city' => 'required',
            'number' => 'required',
            'email' => 'required|email|unique:clients,client_email',
            // pas d'espace après la virgule dans le unique, sinon Laravel considère qu'il y a un espace au nom de la colonne
            'password' => 'required|confirmed|min:8',
        ]);

        Client::create([
            'client_name' => $validated['name'],
            'client_firstName' => $validated['firstName'],
            'client_streetNumber' => $validated['streetNumber'],
            'client_streetName' => $validated['streetName'],
            'client_postcode' => $validated['postcode'],
            'client_city' => $validated['city'],
            'client_number' => $validated['number'],
            'client_email' => $validated['email'],
            'client_password' => Hash::make($validated['password']),
        ]);

        return redirect()->route('clientLogin')->with('success', 'Votre compte a bien été crée !');
    }

    public function clientDashboard(){
        return view('clients.clientDashboard');
    }

    public function adminDashboard(){
        return view('admins.adminDashboard');
    }

    public function logout(){
        \Auth::logout();
        return to_route('clientLogin');
    }

}