<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Hash;
use Illuminate\Validation\Rule;
use function Laravel\Prompts\error;

class ClientController extends Controller
{
    //Permet d'afficher le dashboard du client
    public function clientDashboard($client_id)
    {
        $client = Client::findOrFail($client_id);
        return view('clients.clientDashboard', compact('client'));
    }

    //Récupère tous les clients dans la DB
    public function index()
    {
        return view('client.index', [
            'clients' => Client::all()
        ]);
    }

    //Permet l'affichage du formulaire de création de compte
    public function register(){
        return view('auth.register');
    }

    //Permet l'affichage du formulaire de mise à jour du mot de passe
    public function clientUpdatePassword($client_id)
    {
        $client = Client::findOrFail($client_id);
        return view('clients.clientUpdatePassword', compact('client'));
    }

    //Retrouve et affiche un client spécifique
    public function show(string $id)
    {
        $client = Client::findOrFail($id);
        return view('client.show', compact('client'));
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
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required',
        ]);

        if($validated['password'] !== $validated['password_confirmation']){
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

    //Met à jour les données du client dans la DB
    public function updateClient(Request $request, string $id)
    {
        $client = Client::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required',
            'firstName' => 'required',
            'streetNumber' => 'required',
            'streetName' => 'required',
            'postcode' => 'required',
            'city' => 'required',
            'number' => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('clients', 'client_email')->ignore($client->client_id, 'client_id')
            ],
        ]);


        $client->update([
            'client_name' => $validated['name'],
            'client_firstName' => $validated['firstName'],
            'client_streetNumber' => $validated['streetNumber'],
            'client_streetName' => $validated['streetName'],
            'client_postcode' => $validated['postcode'],
            'client_city' => $validated['city'],
            'client_number' => $validated['number'],
            'client_email' => $validated['email'],
        ]);
    
        return redirect()->back()->with('success', 'Vos informations ont été mises à jour.');
    }

    //Met à jour le mot de passe du client dasn la DB
    public function updateClientPassword(Request $request, string $id)
    {
        $client = Client::findOrFail($id);

        $validated = $request->validate([
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required',
        ]);

        $client->update([
            'client_password' => Hash::make($validated['password']),
        ]);

        return redirect()->route('clientDashboard', ['client_id' => $client->client_id])->with('success', 'Votre mot de passe a été modifié !');
    }

    //Efface les données du client de la db
    public function destroyClient(string $id)
    {
        $client = Client::findOrFail($id);

        $client->delete();

        return redirect()->route('clientLogin')->with('success', 'Votre compte a été effacé !');
    }
}