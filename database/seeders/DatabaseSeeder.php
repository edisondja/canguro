<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\App\Models\User;
use Database\Seeders\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

         DB::table("users")->insert([
            'name' => 'Edison De Jesus',
            'email' =>'edisondja@gmail.com',
            'password' => '$2y$10$U64W1IluXwSQTHbl3mCaLuov5zStaKZpk9XiBlcfolJjyvA1yfOSi']
         );

         DB::table("categories")->insert([   
            [
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
