    <div>

        <form method="POST" action="{{ route('updateClient', ['client_id' => $client->client_id]) }}" class="bg-purple-100 box-border rounded-md shadow-xl w-3/4 text-center place-self-center m-10 p-5">
            @csrf


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
                <label for="name" class="text-indigo-900 font-bold">Nom :</label>
                <input type="text" id="name" name="name" class="bg-yellow-50 border border-purple-900 rounded-sm m-3 p-1" required value="{{ $client->client_name }}">

                <label for="firstName" class="text-indigo-900 font-bold">Prénom :</label>
                <input type="text" id="firstName" name="firstName" class="bg-yellow-50 border border-purple-900 rounded-sm m-3 p-1" required  value="{{ $client->client_firstName }}">
            </div>

            <br>

            <div>
                <label for="streetNumber" class="text-indigo-900 font-bold">N° de rue :</label>
                <input type="text" id="streetNumber" name="streetNumber" class="bg-yellow-50 border border-purple-900 rounded-sm m-3 p-1" required   value="{{ $client->client_streetNumber }}">

                <label for="streetName" class="text-indigo-900 font-bold">Nom de rue :</label>
                <input type="text" id="streetName" name="streetName" class="bg-yellow-50 border border-purple-900 rounded-sm m-3 p-1" required  value="{{ $client->client_streetName }}">

                <br>

                <label for="postcode" class="text-indigo-900 font-bold">Code postal :</label>
                <input type="text" id="postcode" name="postcode" class="bg-yellow-50 border border-purple-900 rounded-sm m-3 p-1" required  value="{{ $client->client_postcode }}">

                <label for="city" class="text-indigo-900 font-bold">Ville :</label>
                <input type="text" id="city" name="city" class="bg-yellow-50 border border-purple-900 rounded-sm m-3 p-1" required  value="{{ $client->client_city }}">
            </div>

            <br>

            <div>
                <label for="number" class="text-indigo-900 font-bold">Numéro de téléphone portable * :</label>
                <input type="text" id="number" name="number" class="bg-yellow-50 border border-purple-900 rounded-sm m-3 p-1" required  value="{{ $client->client_number }}">
            </div>

            <br>

            <div>
                <label for="email" class="text-indigo-900 font-bold">Email :</label>
                <input type="email" id="email" name="email" class="bg-yellow-50 border border-purple-900 rounded-sm m-3 p-1" required  value="{{ $client->client_email }}">
            </div>

            <br>

            <div>                
                <p class="text-indigo-900">Vous souhaitez changer de mot de passe ? C'est par <a href="" class="hover:underline">ici</a> !</p>
            </div>

            <br>

            <button type="submit" class="bg-purple-400 text-center text-yellow-50 font-bold text-2xl border border-3 border-purple-900 rounded-sm m-2 p-2 hover:bg-purple-900"> Modifier </button>
        </form>
    </div>