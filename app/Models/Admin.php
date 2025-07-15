<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasUuids;

    protected $primaryKey = "admin_id";
    public $incrementing = false;
    protected $keyType  ='string';

    protected $fillable=[
        'admin_name',
        'admin_firstName',
        'admin_email',
        'admin_password',
    ];

        public function getAuthPassword(){
        return $this->admin_password;
    }

    public function getAuthIdentifier(){
        return $this->admin_email;
    }

        /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'admin_password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'admin_email_verified_at' => 'datetime',
            'admin_password' => 'hashed',
        ];
    }

}
