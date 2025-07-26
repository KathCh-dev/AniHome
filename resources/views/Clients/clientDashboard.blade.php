@extends('layout')

@section('content')

@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4 text-center w-3/4 mx-auto">
        {{ session('success') }}
    </div>
@endif

    <h1 class="text-center text-indigo-900 font-extrabold text-5xl m-5">Bienvenue {{ $client->client_firstName }}</h1>

    <h2 class="text-center text-indigo-900 font-extrabold text-4xl m-5">Que souhaitez-vous faire aujourd'hui?</h2>

    <section class="bg-purple-100">
        <h3 class="text-center text-indigo-900 font-extrabold text-2xl m-5">Consulter les fiches de vos animaux :</h3>

        
        <div>
            <h4 class="text-center text-indigo-900 font-extrabold text-1xl m-5"> Créer une fiche !</h4>
        </div>
        
        <div>
            <div class="container border ">
                <h4 class="text-center text-indigo-900 font-extrabold text-1xl m-5"> "insérer carte animal"</h4>
            </div>
        </div>
    </section>

    <section>
        <h3 class="text-center text-indigo-900 font-extrabold text-2xl m-5">Réserver une chambre :</h3>
        <p>ceci est un paragraphe</p>
    </section>

    <section class="bg-purple-100">
        <h3 class="text-center text-indigo-900 font-extrabold text-2xl m-5">Réserver un service :</h3>
        <p>ceci est un paragraphe.</p>
    </section>

    <section>
        <h3 class="text-center text-indigo-900 font-extrabold text-2xl m-5">Modifier mes informations :</h3>
        @include('clients.clientCRUD')
    </section>

@endsection