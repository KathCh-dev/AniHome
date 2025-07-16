<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
        public function clientDashboard(){
        $clients = Client::all();
        return view('clientss.clientDashboard', compact('clients'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('client.index', [
            'clients' => Client::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function register(){
        return view('auth.register');
    }
    
    //Enregistrer un nouveau client en DB.
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
            'password' => 'required|confirmed|min:8|same:passwordCheck',
            'passwordCheck' => 'required|confirmed|min:8',
        ]);

        if($validated['password'] !== $validated['passwordCheck']){
            return error('Les deux mots de passe ne correspondent pas.');
        }

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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Client::findOrFail($id);
        return view('client.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
