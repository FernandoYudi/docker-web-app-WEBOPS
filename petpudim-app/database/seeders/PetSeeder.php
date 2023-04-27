<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pets')->insert([

            [
                'name' => 'Chamber',
                'cidade' => 'Londrina',
                'estado' => 'PR',
                'raca' => 'Macaco',
                'idade' => '32',
                'sexo' => 'Macho',
                'Tamanho' => 'A',
                'castracao' => '0',
                'especie' => 'Monke',
                'user_id' => '1',
            ],
            [
                'name' => 'Yudson',
                'cidade' => 'Londrina',
                'estado' => 'PR',
                'raca' => 'Macaco',
                'idade' => '21',
                'sexo' => 'Macho',
                'Tamanho' => 'A',
                'castracao' => '0',
                'especie' => 'Monke',
                'user_id' => '1',
            ],
            [
                'name' => 'Kuki',
                'cidade' => 'Londrina',
                'estado' => 'PR',
                'raca' => 'Macaco',
                'idade' => '10',
                'sexo' => 'Fêmea',
                'Tamanho' => 'A',
                'castracao' => '0',
                'especie' => 'Monke',
                'user_id' => '1',
            ]

        ]);
    }
}
