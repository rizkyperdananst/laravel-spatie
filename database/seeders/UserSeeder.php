<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin')
        ]);

        $admin->assignRole('admin');

        $writing = User::create([
            'name' => 'Writing',
            'email' => 'writing@gmail.com',
            'password' => Hash::make('writing')
        ]);

        $writing->assignRole('writing');
    }
}
