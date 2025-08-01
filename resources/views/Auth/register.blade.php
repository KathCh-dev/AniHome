@extends('layout')

@section('content')

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4 text-center w-3/4 mx-auto">
            {{ session('success') }}
        </div>
    @endif

                @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

    <div>
        <h2 class="text-center text-indigo-900 font-extrabold text-4xl m-5">Créer un compte</h2>

        <form method="POST" action="{{ route('doRegister') }}" class="bg-purple-100 box-border rounded-md shadow-xl w-3/4 text-center place-self-center m-10 p-5" id="registerForm">
            @csrf

            <!-- @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif -->
            <!-- utile en phase de test, permet de faire apparaître les erreurs de formulaire en haut de la page. Incompréhensible pour un utilisateur lambda cependant. -->


            <div>
                <label for="name" class="text-indigo-900 font-bold">Nom :</label>
                <input type="text" id="name" name="name" class="bg-yellow-50 border border-purple-900 rounded-sm m-3 p-1" required>
                <div id="error-name" class="text-red-500 text-sm"></div>

                <label for="firstName" class="text-indigo-900 font-bold">Prénom :</label>
                <input type="text" id="firstName" name="firstName" class="bg-yellow-50 border border-purple-900 rounded-sm m-3 p-1" required>
                <div id="error-firstName" class="text-red-500 text-sm"></div>
            </div>

            <br>

            <div>
                <label for="streetNumber" class="text-indigo-900 font-bold">N° de rue :</label>
                <input type="text" id="streetNumber" name="streetNumber" class="bg-yellow-50 border border-purple-900 rounded-sm m-3 p-1" required>
                <div id="error-streetNumber" class="text-red-500 text-sm"></div>

                <label for="streetName" class="text-indigo-900 font-bold">Nom de rue :</label>
                <input type="text" id="streetName" name="streetName" class="bg-yellow-50 border border-purple-900 rounded-sm m-3 p-1" required>
                <div id="error-streetName" class="text-red-500 text-sm"></div>

                <br>

                <label for="postcode" class="text-indigo-900 font-bold">Code postal :</label>
                <input type="text" id="postcode" name="postcode" class="bg-yellow-50 border border-purple-900 rounded-sm m-3 p-1" required>
                <div id="error-postcode" class="text-red-500 text-sm"></div>

                <label for="city" class="text-indigo-900 font-bold">Ville :</label>
                <input type="text" id="city" name="city" class="bg-yellow-50 border border-purple-900 rounded-sm m-3 p-1" required>
                <div id="error-city" class="text-red-500 text-sm"></div>
            </div>

            <br>

            <div>
                <label for="number" class="text-indigo-900 font-bold">Numéro de téléphone portable * :</label>
                <input type="tel" id="number" name="number" class="bg-yellow-50 border border-purple-900 rounded-sm m-3 p-1" required>
                <div id="error-number" class="text-red-500 text-sm"></div>
            </div>

            <p class="text-indigo-900">* Il est nécessaire de nous transmettre un numéro de téléphone portable pour pouvoir vous contacter durant le séjour de votre animal.</p>

            <br>

            <div>
                <label for="email" class="text-indigo-900 font-bold">Email :</label>
                <input type="email" id="email" name="email" class="bg-yellow-50 border border-purple-900 rounded-sm m-3 p-1" required>
                <div id="error-email" class="text-red-500 text-sm"></div>
            </div>

            <br>

            <div>
                <label for="password" class="text-indigo-900 font-bold">Mot de passe * :</label>
                <input type="password" id="password" name="password" class="bg-yellow-50 border border-purple-900 rounded-sm m-3 p-1" required>
                <div id="error-password" class="text-red-500 text-sm"></div>

                <br>

                <label for="password_confirmation" class="text-indigo-900 font-bold">Confirmation du mot de passe :</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="bg-yellow-50 border border-purple-900 rounded-sm m-3 p-1" required>
                <div id="error-password_confirmation" class="text-red-500 text-sm"></div>

                <p class="text-indigo-900">* Votre mot de passe doit contenir au moins 8 caractères, dont une majuscule, une minuscule, un chiffre et un caractère spécial.</p>
            </div>

            <br>

            <button type="submit" class="bg-purple-400 text-center text-yellow-50 font-bold text-2xl border border-3 border-purple-900 rounded-sm m-2 p-2 hover:bg-purple-900"> Créer mon espace </button>

            <div class="text-indigo-900 font-semibold">
                Vous avez déjà un compte? <a href="{{ route('clientLogin') }}" class="hover:underline">Se connecter</a>
            </div>

        </form>
        @vite('resources/js/register.js');
    </div>


@endsection