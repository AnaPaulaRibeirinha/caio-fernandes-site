<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::query()->updateOrCreate(
            [
                'email' => 'admin@caiofernandes.com.br',
            ],
            [
                'name' => 'Administrador',
                'password' => Hash::make('Admin@123456'),
            ]
        );
    }
}