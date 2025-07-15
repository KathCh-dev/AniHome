<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    use HasUuids;

    protected $primaryKey = 'client_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable=[
        'client_name',
        'client_firstName',
        'client_streetNumber',
        'client_streetName',
        'client_postcode',
        'client_city',
        'client_number',
        'client_email',
        'client_password',
    ];

    public function getAuthPassword(){
        return $this->client_password;
    }

    public function getAuthIdentifier(){
        return $this->client_email;
    }

        /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'client_password',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'client_email_verified_at' => 'datetime',
            'client_password' => 'hashed',
        ];
    }

}
