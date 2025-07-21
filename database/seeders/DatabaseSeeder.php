<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Administrador',
            'apellido' => 'urgencia',
            'rut' => '16932412-3',
            'email' => 'admin@admin.com',
            'password' =>Hash::make('123456789')
        ]);

        User::create([
            'name' => 'usuario',
            'apellido' => 'prueba',
            'rut' => '12345678-9',
            'email' => 'usuarioprueba@admin.com',
            'password' =>Hash::make('123456789')
        ]);
    }
}
