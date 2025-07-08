@extends('layout')

@section('content')

    <div>
        <h2 class="text-center text-indigo-900 font-extrabold text-4xl">Créer un compte</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <label for="" class="text-indigo-800 font-bold">Nom :</label>
                <input type="">

                <label for="" class="text-indigo-800 font-bold">Prénom :</label>
                <input type="">
            </div>

            <br>

            <div>
                <label for="" class="text-indigo-800 font-bold">N° de rue :</label>
                <input type="">

                <label for="" class="text-indigo-800 font-bold">Nom de rue :</label>
                <input type="">

                <label for="" class="text-indigo-800 font-bold">Code postal :</label>
                <input type="">

                <label for="" class="text-indigo-800 font-bold">Ville :</label>
                <input type="">
            </div>

            <br>

            <div>
                <label for="" class="text-indigo-800 font-bold">Numéro de téléphone :</label>
                <input type="">
            </div>

            <br>

            <div>
                <label for="" class="text-indigo-800 font-bold">Email :</label>
                <input type="">
            </div>

            <br>

            <div>
                <label for="" class="text-indigo-800 font-bold">Mot de passe :</label>
                <input type="">

                <br>

                <label for="" class="text-indigo-800 font-bold">Confirmation du mot de passe :</label>
                <input type="">
            </div>

            <br>

            <button> Valider </button>

        </form>
    </div>


@endsection