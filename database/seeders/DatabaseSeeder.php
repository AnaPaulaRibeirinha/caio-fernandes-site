<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        User::query()->updateOrCreate(
            ['email' => 'admin@seudominio.com'],
            [
                'name' => 'Administrador',
                'password' => Hash::make('SUA_SENHA_FORTE'),
            ]
        );

        $this->call([
            HomeContentSeeder::class,
        ]);
    }
}