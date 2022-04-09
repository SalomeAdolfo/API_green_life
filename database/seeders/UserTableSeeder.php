<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name'=> 'Adolfo Angel',
            'primer_apellido' => 'Salomé',
            'segundo_apellido' => 'Hernández',
            'sexo' => 'masculino',
            'email' => 'dsg1712@hotmmail.com',
            'perfil' => 'Vendedor',
            'password' => bcrypt('12345678'),

        ],
        ['name'=> 'David',
        'primer_apellido' => 'Gallegos',
        'segundo_apellido' => 'Gómez',
        'sexo' => 'masculino',
        'email' => 'dsg864236@gmail.com',
        'perfil' => 'Vendedor',
        'password' => bcrypt('12345678'),
    ],
    ['name'=> 'Edgar',
        'primer_apellido' => 'Osorio',
        'segundo_apellido' => 'Gómez',
        'sexo' => 'masculino',
        'email' => 'dsg864@gmail.com',
        'perfil' => 'Cliente',
        'password' => bcrypt('12345678'),
        ]
        ]);
    }
}
