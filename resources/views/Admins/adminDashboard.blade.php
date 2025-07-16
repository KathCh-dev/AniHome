@extends('layout')

@section('content')

    <h1 class="text-center text-indigo-900 font-extrabold text-5xl m-5">Bienvenue </h1>

    <h2 class="text-center text-indigo-900 font-extrabold text-4xl m-5">Que souhaitez-vous faire aujourd'hui?</h2>

    <section class="bg-purple-100">
        <h3 class="text-center text-indigo-900 font-extrabold text-2xl m-5">Consulter les fiches de vos clients :</h3>

        <div>
            <h4 class="text-center text-indigo-900 font-extrabold text-1xl">Nombre de clients inscrits : {{ number_format($clients->count()) }}</h4>
        </div>

        <br>
            
            <div class="flex flex-col justify-self-center p-10">
                <table>
                    <thead>
                        <tr>
                            <th class="border p-2 text-center">Noms :</th>
                            <th class="border p-2 text-center">Animaux de compagnie :</th>
                            <th class="border p-2 text-center">Adresses :</th>
                            <th class="border p-2 text-center">Téléphones :</th>
                            <th class="border p-2 text-center">Emails :</th>
                            <th class="border p-2 text-center">Actions :</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clients as $client)
                            <tr>
                                <td class="border p-2 text-center">{{ $client->client_name }} {{ $client->client_firstName }}</td>
                                <td class="border p-2 text-center">insérer total animaux</td>
                                <td class="border p-2 text-center">{{ $client->client_streetNumber }} {{ $client->client_streetName }}, {{ $client->client_postcode }} {{ $client->client_city }}</td>
                                <td class="border p-2 text-center">{{ $client->client_number }}</td>
                                <td class="border p-2 text-center">{{ $client->client_email }}</td>
                                <td class="border p-2 text-center">
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