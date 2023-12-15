<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("categories")->insert([[
            "user_id"=>1,
            'name'=>'History',
            'description'=>'Categoria donde se publica todo a base de historias'
        ],
        [
            "user_id"=>1,
            'name'=>'Science',
            'description'=>'Categoria para clasificar contenido en base a la ciencia'
        ],
        [
            "user_id"=>1,
            'name'=>'Software',
            'description'=>'Categoria para publicar sobre contenido de la ciencia de la computación'
        ]
        ]);
    }
}
