<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::query()->delete();

        $user = User::create([
            'name' => "Juan Reyes",
            'username' => "Dev",
            "email" => "snjuank@gmail.com",
            "password" => "1234"
        ]);
        $user->assignRole('Super Administrador');


        $user = User::create([
            'name' => "Compras Prueba",
            'username' => "Compras",
            "email" => "compras@norson.com",
            "password" => "1234"
        ]);
        $user->assignRole('Compras');

        
        $user = User::create([
            'name' => "Proveedor Prueba",
            'username' => "Proveedor",
            "email" => "provider@norson.com",
            "password" => "1234"
        ]);
        $user->assignRole('Proveedor');


    }
}
