<?php

namespace Database\Seeders;

use App\Models\Pet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pets=[
            [
                'pet_name' => 'Si',
                'pet_age' => '5',
                'pet_weight' => '3',
                'pet_height' => '30',
                'pet_breed' => 'Siamois',
                'pet_particularity' => 'aucune',
                'pet_treatment' => 'aucun',
                'pet_special_needs' => 'aucun',
                'pet_diet' => 'croquettes et pâtée',
                'pet_sociability' => "ne s'entend pas avec les chiens",
                'pet_allergy' => 'aucune',
                'client_id' => '55542a2f-cf90-4232-9dc4-041fec4f8e38',
            ],
            [
                'pet_name' => 'Am',
                'pet_age' => '5',
                'pet_weight' => '3',
                'pet_height' => '30',
                'pet_breed' => 'Siamois',
                'pet_particularity' => 'aucune',
                'pet_treatment' => 'aucun',
                'pet_special_needs' => 'aucn',
                'pet_diet' => 'croquettes et pâtée',
                'pet_sociability' => "ne s'entend pas avec les chiens",
                'pet_allergy' => 'aucune',
                'client_id' => '55542a2f-cf90-4232-9dc4-041fec4f8e38',
            ],
            [
                'pet_name' => 'Garfield',
                'pet_age' => '8',
                'pet_weight' => '8',
                'pet_height' => '40',
                'pet_breed' => 'Européen',
                'pet_particularity' => 'aucune',
                'pet_treatment' => 'aucun',
                'pet_special_needs' => 'aucun',
                'pet_diet' => 'lasagnes et sandwichs',
                'pet_sociability' => 'chats ok, chien ok',
                'pet_allergy' => 'aucune',
                'client_id' => '6f0b07a6-0dda-4f19-b2b3-aa67c4312b33',
            ],
            [
                'pet_name' => 'Odie',
                'pet_age' => '6',
                'pet_weight' => '7',
                'pet_height' => '25',
                'pet_breed' => 'Jack Russel Terrier',
                'pet_particularity' => 'aucune',
                'pet_treatment' => 'aucun',
                'pet_special_needs' => 'aucun',
                'pet_diet' => 'croquettes',
                'pet_sociability' => 'chat ok, chien ok',
                'pet_allergy' => 'aucune',
                'client_id' => 'be35f2cd-a53b-4711-b056-4c58b87db177',
            ],

        ];

        foreach($pets as $pet)
        {
            Pet::create([
                'pet_id' => \Str::uuid(),
                'pet_name' => $pet['pet_name'],
                'pet_age' => $pet['pet_age'],
                'pet_weight' => $pet['pet_weight'],
                'pet_height' => $pet['pet_height'],
                'pet_breed' => $pet['pet_breed'],
                'pet_particularity' => $pet['pet_particularity'],
                'pet_treatment' => $pet['pet_treatment'],
                'pet_special_needs' => $pet['pet_special_needs'],
                'pet_diet' => $pet['pet_diet'],
                'pet_sociability' => $pet['pet_sociability'],
                'pet_allergy' => $pet['pet_allergy'],
                'client_id' => $pet['client_id'],
            ]);
        }
    }
}
