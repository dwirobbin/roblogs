<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name'      => 'Admin',
            'username'  => 'admin',
            'email'     => 'admin@gmail.com',
            'password'  => Hash::make('password'),
            'is_active' => true,
        ]);
        $admin->assignRole('Admin');

        $fulan = User::create([
            'name'      => 'Fulan',
            'username'  => 'fulan',
            'email'     => 'fulan@gmail.com',
            'password'  => Hash::make('password'),
            'is_active' => true,
        ]);
        $fulan->assignRole('Writer');
    }
}
