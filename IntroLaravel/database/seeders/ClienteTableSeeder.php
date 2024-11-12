<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Importante para usar DB

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombre' => 'Luis',
                'apellido' => 'Mosqueda',
                'correo' => 'luis@gmail.com',
                'telefono' => '4424336305',
            ],
            [
                'nombre' => 'Alberto',
                'apellido' => 'Utrera',
                'correo' => 'beto@gmail.com',
                'telefono' => '4424336305',
            ],
            [
                'nombre' => 'Celina',
                'apellido' => 'Perez',
                'correo' => 'celi@gmail.com',
                'telefono' => '4424336305',
            ]]);
    }
}
