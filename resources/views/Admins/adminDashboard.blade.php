@extends('layout')

@section('content')

    <h1 class="text-center text-indigo-900 font-extrabold text-5xl m-5">Bienvenue </h1>

    <h2 class="text-center text-indigo-900 font-extrabold text-4xl m-5">Que souhaitez-vous faire aujourd'hui?</h2>

    <section>
        <h3 class="text-center text-indigo-900 font-extrabold text-2xl m-5">Consulter les fiches de vos clients :</h3>

        <div>
            <h4 class="text-center text-indigo-900 font-extrabold text-1xl">Nombre de clients inscrits : {{ number_format($clients->count()) }}</h4>
        </div>

        <br>
            
            <div class="flex flex-col justify-self-center p-10">
                <table>
                    <thead>
                        <tr class="text-indigo-900 bg-purple-100">
                            <th class="border-2 border-indigo-900 p-2 text-center text-purple-900 font-extrabold">Noms :</th>
                            <th class="border-2 border-indigo-900 p-2 text-center text-purple-900 font-extrabold">Animaux de compagnie :</th>
                            <th class="border-2 border-indigo-900 p-2 text-center text-purple-900 font-extrabold">Adresses :</th>
                            <th class="border-2 border-indigo-900 p-2 text-center text-purple-900 font-extrabold">Téléphones :</th>
                            <th class="border-2 border-indigo-900 p-2 text-center text-purple-900 font-extrabold">Emails :</th>
                            <th class="border-2 border-indigo-900 p-2 text-center text-purple-900 font-extrabold">Actions :</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clients as $client)
                            <tr class="{{ $loop->even ? 'bg-purple-100' : 'bg-yellow-50'}}">
                                <td class="border-2 border-indigo-900 p-2 text-center text-indigo-900 font-medium">{{ $client->client_name }} {{ $client->client_firstName }}</td>
                                <td class="border-2 border-indigo-900 p-2 text-center text-indigo-900 font-medium">insérer total animaux</td>
                                <td class="border-2 border-indigo-900 p-2 text-center text-indigo-900 font-medium">{{ $client->client_streetNumber }} {{ $client->client_streetName }}, {{ $client->client_postcode }} {{ $client->client_city }}</td>
                                <td class="border-2 border-indigo-900 p-2 text-center text-indigo-900 font-medium">{{ $client->client_number }}</td>
                                <td class="border-2 border-indigo-900 p-2 text-center text-indigo-900 font-medium">{{ $client->client_email }}</td>
                                <td class="border-2 border-indigo-900 p-2 text-center text-indigo-900 font-medium">
                                    <a href="">Voir</a><br>
                                    <a href="">Modifier</a>
                                    <form action="" method="">
                                        @csrf
                                        <button>Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

    </section>

@endsection