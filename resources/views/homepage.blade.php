@extends('layout')

@section('content')


<section class="bg-purple-100 p-5 flex-column justify-center" id="welcome-section">
        <h1 class="text-center text-indigo-900 font-extrabold text-5xl m-5">Bienvenue chez Ani'Home</h1>

        <img src="\..\..\images\homepage-chien-accueil.png" alt="Photo d'un chien qui court sur la plage.">

        <a href="{{ route('register') }}"><button class="bg-purple-400 text-center text-yellow-50 font-bold text-base border border-3 border-purple-900 m-2 p-2 hover:bg-purple-900 button" id="create-account">Créer un compte</button></a>
    </section>

    <section class="p-5" id="services-section">
        <h2 class="text-center text-indigo-900 font-extrabold text-2xl m-5">Découvrez nos services</h2>
        <div class="flex">
            <div class="services-card">
                <h3>Promenade</h3>
                <img src="\..\..\images\promenade.png" alt="Photo d'un Cavalier King Charles.">
            </div>
            <div class="services-card">
                <h3>Toilettage</h3>
                <img src="\..\..\images\toilettage.png" alt="Photo d'un cochon d'Inde dans son bain.">
            </div>
            <div class="services-card">
                <h3>Dressage</h3>
                <img src="\..\..\images\dressage.png" alt="Photo d'un Labrador Chocolat qui fait le beau pour recevoir une friandise.">
            </div>
        </div>
    </section>

    <section class="bg-purple-100 p-5" id="rooms-section">
        <h2 class="text-center text-indigo-900 font-extrabold text-2xl m-5">Découvrez nos séjours en chambre</h2>
        <div class="flex">
            <div class="max-w-sm mx-auto bg-white rounded-2xl shadow-md p-6 space-y-4 flex-column room-card" id="room1">
                <h3>Chambre 1 :</h3>
                <img src="\..\..\images\logo-maison.png" alt="Logo d'une maison.">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, sunt iure! Iure ducimus aspernatur perspiciatis possimus aut! Eaque recusandae, repellat assumenda minima tenetur, est ullam qui perferendis sed enim voluptates!</p>
                <button class="bg-purple-400 text-center text-yellow-50 font-bold text-base border border-3 border-purple-900 m-2 p-2 hover:bg-purple-900 button">Réserver</button>
            </div>

            <div class="max-w-sm mx-auto bg-white rounded-2xl shadow-md p-6 space-y-4 flex-column room-card" id="room2">
                <h3>Chambre 2 :</h3>
                <img src="\..\..\images\logo-maison.png" alt="Logo d'une maison.">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, sunt iure! Iure ducimus aspernatur perspiciatis possimus aut! Eaque recusandae, repellat assumenda minima tenetur, est ullam qui perferendis sed enim voluptates!</p>
                <button class="bg-purple-400 text-center text-yellow-50 font-bold text-base border border-3 border-purple-900 m-2 p-2 hover:bg-purple-900 button">Réserver</button>
            </div>

            <div class="max-w-sm mx-auto bg-white rounded-2xl shadow-md p-6 space-y-4 flex-column room-card" id="room3">
                <h3>Chambre 3 :</h3>
                <img src="\..\..\images\logo-maison.png" alt="Logo d'une maison.">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, sunt iure! Iure ducimus aspernatur perspiciatis possimus aut! Eaque recusandae, repellat assumenda minima tenetur, est ullam qui perferendis sed enim voluptates!</p>
                <button class="bg-purple-400 text-center text-yellow-50 font-bold text-base border border-3 border-purple-900 m-2 p-2 hover:bg-purple-900 button">Réserver</button>
            </div>
        </div>
    </section>
    @vite('resources/css/homepage.css');

@endsection