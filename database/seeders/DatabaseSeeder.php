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
        //Usuarios administrador creado
        User::create([
            'name' => 'Administrador',
            'apellido' => 'Consuelo',
            'rut' => '16932412-3',
            'password' =>Hash::make('123456789')
        ]);
    }
}
