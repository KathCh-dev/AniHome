<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasUuids;

    protected $primaryKey = 'pet_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable=[
        'pet_name',
        'pet_age',
        'pet_weight',
        'pet_height',
        'pet_breed',
        'pet_particularity',
        'pet_treatment',
        'pet_special_needs',
        'pet_diet',
        'pet_sociability',
        'pet_allergy',
        'client_id',
    ];

    //Définit la relation entre Pet et Client
    public function client(){
        return $this->belongsTo(Client::class, 'client_id', 'client_id');
        //'client_id' (1er) = clé étrangère dans la table pets, 'client_id' (2eme) = clé primaire dasn la table clients
    }
}
