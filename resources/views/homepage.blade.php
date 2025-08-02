@extends('layout')

@section('content')


    <section class="bg-purple-100 p-5" id="welcome-section">
        <div class="flex-column center">
            <h1 class="text-center text-indigo-900 font-extrabold text-5xl m-5" id="titre-accueil">Bienvenue chez Ani'Home</h1>
    
            <img src="\..\..\images\homepage-chien-accueil.png" alt="Photo d'un chien qui court sur la plage." class="place-self-center" id="welcome-dog-image">
    
            <a href="{{ route('register') }}"><button class="bg-purple-400 text-center text-yellow-50 font-bold text-base border border-3 border-purple-900 m-2 p-2 hover:bg-purple-900 button" id="create-account">Créer un compte</button></a>
        </div>
    </section>

    <section class="p-5 padding-bottom" id="services-section">
        <h2 class="text-center text-indigo-900 font-extrabold text-2xl m-5">Découvrez nos services</h2>
        <div class="flex" id="services-bloc">
            <div class="services-card text-center max-w-sm mx-auto">
                <h3 class="text-indigo-900 font-extrabold">Promenade</h3>
                <br>
                <img src="\..\..\images\promenade.png" alt="Photo d'un Cavalier King Charles." class="services-image" id="walk-image">
            </div>
            <div class="services-card text-center max-w-sm mx-auto">
                <h3 class="text-indigo-900 font-extrabold">Toilettage</h3>
                <br>
                <img src="\..\..\images\toilettage.png" alt="Photo d'un cochon d'Inde dans son bain." class="services-image" id="grooming-image">
            </div>
            <div class="services-card text-center max-w-sm mx-auto">
                <h3 class="text-indigo-900 font-extrabold">Dressage</h3>
                <br>
                <img src="\..\..\images\dressage.png" alt="Photo d'un Labrador Chocolat qui fait le beau pour recevoir une friandise." class="services-image" id="training-image">
            </div>
        </div>
    </section>

    <section class="bg-purple-100 p-5 padding-bottom" id="rooms-section">
        <h2 class="text-center text-indigo-900 font-extrabold text-2xl m-5">Découvrez nos séjours en chambre</h2>
        <div class="flex" id="rooms-bloc">
            <div class="max-w-sm mx-auto rounded-2xl shadow-md p-6 space-y-4 flex-column room-card center" id="room1">
                <h3 class="text-indigo-900 font-extrabold">Chambre 1 :</h3>
                <img src="\..\..\images\logo-maison.png" alt="Logo d'une maison.">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, sunt iure! Iure ducimus aspernatur perspiciatis possimus aut! Eaque recusandae, repellat assumenda minima tenetur, est ullam qui perferendis sed enim voluptates!</p>
                <button class="bg-purple-400 text-center text-yellow-50 font-bold text-base border border-3 border-purple-900 m-2 p-2 hover:bg-purple-900 button">Réserver</button>
            </div>

            <div class="max-w-sm mx-auto rounded-2xl shadow-md p-6 space-y-4 flex-column room-card center" id="room2">
                <h3 class="text-indigo-900 font-extrabold">Chambre 2 :</h3>
                <img src="\..\..\images\logo-maison.png" alt="Logo d'une maison.">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, sunt iure! Iure ducimus aspernatur perspiciatis possimus aut! Eaque recusandae, repellat assumenda minima tenetur, est ullam qui perferendis sed enim voluptates!</p>
                <button class="bg-purple-400 text-center text-yellow-50 font-bold text-base border border-3 border-purple-900 m-2 p-2 hover:bg-purple-900 button">Réserver</button>
            </div>

            <div class="max-w-sm mx-auto rounded-2xl shadow-md p-6 space-y-4 flex-column room-card center" id="room3">
                <h3 class="text-indigo-900 font-extrabold">Chambre 3 :</h3>
                <img src="\..\..\images\logo-maison.png" alt="Logo d'une maison.">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, sunt iure! Iure ducimus aspernatur perspiciatis possimus aut! Eaque recusandae, repellat assumenda minima tenetur, est ullam qui perferendis sed enim voluptates!</p>
                <button class="bg-purple-400 text-center text-yellow-50 font-bold text-base border border-3 border-purple-900 m-2 p-2 hover:bg-purple-900 button">Réserver</button>
            </div>
        </div>
    </section>
    @vite('resources/css/homepage.css')

@endsection