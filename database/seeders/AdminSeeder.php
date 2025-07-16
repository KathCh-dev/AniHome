<?php

namespace Database\Seeders;

use App\Models\Admin;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins=[
            [
                'admin_name' => 'Smith',
                'admin_firstName' => 'Aly',
                'admin_email' => 'aly.smith@email.com',
                'admin_password' => Hash::make('Admin1234')
            ],
        ];

        foreach($admins as $admin){
            Admin::create([
                'admin_id' => \Str::uuid(),
                'admin_name' => $admin['admin_name'],
                'admin_firstName' => $admin['admin_firstName'],
                'admin_email' => $admin['admin_email'],
                'admin_password' => $admin['admin_password'],
            ]);
        }
    }
}
