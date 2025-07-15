@extends('layout')

@section('content')

    <div>
        <h2 class="text-center text-indigo-900 font-extrabold text-4xl m-5">Créer un compte</h2>

        <form method="POST" action="{{ route('doRegister') }}" class="bg-purple-100 box-border rounded-md shadow-xl w-3/4 text-center place-self-center m-10 p-5">
            @csrf

            <div>
                <label for="name" class="text-indigo-900 font-bold">Nom :</label>
                <input type="text" id="name" name="name" class="bg-yellow-50 border border-purple-900 rounded-sm m-3 p-1" required>

                <label for="firstName" class="text-indigo-900 font-bold">Prénom :</label>
                <input type="text" id="firstName" name="firstName" class="bg-yellow-50 border border-purple-900 rounded-sm m-3 p-1" required>
            </div>

            <br>

            <div>
                <label for="streetNumber" class="text-indigo-900 font-bold">N° de rue :</label>
                <input type="text" id="streetNumber" name="streetNumber" class="bg-yellow-50 border border-purple-900 rounded-sm m-3 p-1" required>

                <label for="streetName" class="text-indigo-900 font-bold">Nom de rue :</label>
                <input type="text" id="streetName" name="streetName" class="bg-yellow-50 border border-purple-900 rounded-sm m-3 p-1" required>

                <br>

                <label for="postcode" class="text-indigo-900 font-bold">Code postal :</label>
                <input type="text" id="postcode" name="postcode" class="bg-yellow-50 border border-purple-900 rounded-sm m-3 p-1" required>

                <label for="city" class="text-indigo-900 font-bold">Ville :</label>
                <input type="text" id="city" name="city" class="bg-yellow-50 border border-purple-900 rounded-sm m-3 p-1" required>
            </div>

            <br>

            <div>
                <label for="number" class="text-indigo-900 font-bold">Numéro de téléphone portable * :</label>
                <input type="text" id="number" name="number" class="bg-yellow-50 border border-purple-900 rounded-sm m-3 p-1" required>
            </div>

            <p class="text-indigo-900">* Il est nécessaire de nous transmettre un numéro de téléphone portable pour pouvoir vous contacter durant le séjour de votre animal.</p>

            <br>

            <div>
                <label for="email" class="text-indigo-900 font-bold">Email :</label>
                <input type="email" id="email" name="email" class="bg-yellow-50 border border-purple-900 rounded-sm m-3 p-1" required>
            </div>

            <br>

            <div>
                <label for="password" class="text-indigo-900 font-bold">Mot de passe * :</label>
                <input type="password" id="pasword" name="password" class="bg-yellow-50 border border-purple-900 rounded-sm m-3 p-1" required>

                <br>

                <label for="passwordCheck" class="text-indigo-900 font-bold">Confirmation du mot de passe :</label>
                <input type="password" id="passwordCheck" name="passwordCheck" class="bg-yellow-50 border border-purple-900 rounded-sm m-3 p-1" required>

                <p class="text-indigo-900">* Votre mot de passe doit contenir au moins 8 caractères, dont un chiffre et un caractère spécial.</p>
            </div>

            <br>

            <button type="submit" class="bg-purple-400 text-center text-yellow-50 font-bold text-2xl border border-3 border-purple-900 rounded-sm m-2 p-2 hover:bg-purple-900"> Créer mon espace </button>

            <div class="text-indigo-900 font-semibold">
                Vous avez déjà un compte? <a href="{{ route('clientLogin') }}" class="hover:underline">Se connecter</a>
            </div>

        </form>
    </div>


@endsection