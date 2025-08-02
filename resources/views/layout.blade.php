<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ani'Home</title>
    @vite('resources/css/app.css')
</head>

<body>
    <nav class="shadow-lg">
        <div class="flex justify-between">
            <div class="flex items-center m-3 space-x-4">
                <a href="" class="text-purple-900 font-medium hover:underline">Chambres</a>
                <a href="" class="text-purple-900 font-medium hover:underline">Services</a>
                <a href="" class="text-purple-900 font-medium hover:underline">Contact</a>
            </div>
            <a href="{{ route('homepage') }}" class="content-center"><img src="..\..\images\logo-anihome.png" alt="Logo cliquable d'Ani'Home, il vous ramène à la page d'accueil du site."></a>

            <!-- Bouton de connexion si la personne n'est pas connectée -->
            @guest
                <a href="{{ route('clientLogin') }}"><button class="bg-purple-400 text-center text-yellow-50 font-bold text-base border border-3 border-purple-900 rounded-3xl m-2 p-2 hover:bg-purple-900">Se connecter ➜</button></a>
            @endguest

            <!-- Bouton de déconnexion si la personne est connectée -->
            @auth
                <a href="{{ route('logout') }}"><button class="bg-purple-400 text-center text-yellow-50 font-bold text-base border border-3 border-purple-900 rounded-3xl m-2 p-2 hover:bg-purple-900">Se déconnecter ➜</button></a>
            @endauth

        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="">
        <div class="flex flex-col justify-self-center p-5">
            <div class="flex items-center m-3 space-x-4">
                <a href="" class="text-purple-900 font-medium hover:underline">Accueil</a>
                <a href="" class="text-purple-900 font-medium hover:underline">A propos</a>
                <a href="" class="text-purple-900 font-medium hover:underline">Contact</a>

            </div>
            <div class="flex items-center m-3 space-x-4">
                <img src="..\..\images\logo-facebook.png" alt="Logo Facebook cliquable, il vous ramène à la page Facebook d'Ani'Home.">
                <img src="..\..\images\logo-twitter.png" alt="Logo Twitter cliquable, il vous ramène à la page Twitter d'Ani'Home.">
                <img src="..\..\images\logo-instagram.png" alt="Logo Instagram cliquable, il vous ramène à la page Instagram d'Ani'Home.">
                <img src="..\..\images\logo-youtube.png" alt="Logo Youtube cliquable, il vous ramène à la page Youtube d'Ani'Home.">
            </div>
            <p class="text-xs">© 2025 Ani'Home. Tous droits réservés.</p>
        </div>
    </footer>
</body>

</html>