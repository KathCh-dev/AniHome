@extends('layout')

@section('content')

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4 text-center w-3/4 mx-auto">
            {{ session('success') }}
        </div>
    @endif

    <div class="container h-3/4 place-self-center">
        <h2 class="text-center text-indigo-900 font-extrabold text-4xl m-5">Changement de mot de passe :</h2>

        <form method="POST" action="{{ route('updateClientPassword', ['client_id' => $client->client_id]) }}" class="bg-purple-100 box-border rounded-md shadow-xl w-3/4 text-center place-self-center m-10 p-5">
            @csrf

            <div>
                <label for="password" class="text-indigo-900 font-bold">Nouveau mot de passe :</label>
                <input type="password" id="password" name="password" class="bg-yellow-50 border border-purple-900 rounded-sm m-3 p-1" required>
            </div>

            <br>

            <div>
                <label for="password_confirmation" class="text-indigo-900 font-bold">Confirmation du nouveau mot de passe :</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="bg-yellow-50 border border-purple-900 rounded-sm m-3 p-1" required></p>
            </div>

            <br>

            <button type="submit" class="bg-purple-400 text-center text-yellow-50 font-bold text-2xl border border-3 border-purple-900 rounded-sm m-2 p-1 hover:bg-purple-900"> Modifier le mot de passe </button>

        </form>
    </div>


@endsection