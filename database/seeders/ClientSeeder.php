<?php

namespace Database\Seeders;

use App\Models\Client;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients=[
            [
                'client_name' => 'Doe',
                'client_firstName' => 'John',
                'client_streetNumber' => '5',
                'client_streetName' => 'rue de la tortue',
                'client_postcode' => '95000',
                'client_city' => 'TortueVille',
                'client_number' => '+33696754285',
                'client_email' => 'john.doe@email.com',
                'client_password' => Hash::make('password')
            ],
            [
                'client_name' => 'Doe',
                'client_firstName' => 'Jane',
                'client_streetNumber' => '90bis',
                'client_streetName' => 'avenue du Chien qui bave',
                'client_postcode' => '46000',
                'client_city' => 'ChatVille',
                'client_number' => '+33672399476',
                'client_email' => 'jane.doe@email.com',
                'client_password' => Hash::make('password')
            ],
            [
                'client_name' => 'Ombrage',
                'client_firstName' => 'Dolores',
                'client_streetNumber' => '43ter',
                'client_streetName' => 'rue du Chat qui Pêche',
                'client_postcode' => '01',
                'client_city' => 'Chaton',
                'client_number' => '+33698753645',
                'client_email' => 'dolores.ombrage@email.com',
                'client_password' => Hash::make('password')
            ],
        ];

        foreach($clients as $client){
            Client::create([
                'client_id' => \Str::uuid(),
                'client_name' => $client['client_name'],
                'client_firstName' => $client['client_firstName'],
                'client_streetNumber' => $client['client_streetNumber'],
                'client_streetName' => $client['client_streetName'],
                'client_postcode' => $client['client_postcode'],
                'client_city' => $client['client_city'],
                'client_number' => $client['client_number'],
                'client_email' => $client['client_email'],
                'client_password' => $client['client_password'],
            ]);
        }
    }
}
