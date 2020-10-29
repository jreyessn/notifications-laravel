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
            'username' => "developer",
            "email" => "developer@gmail.com",
            "password" => "1234"
        ]);
        $user->assignRole(['Administrador', 'Autorizador SAP']);

        $user = User::create([
            'name' => "Jesus Basurto",
            'username' => "JeanlogisticsAdmin",
            "email" => "jbasurto@empresainteligente.com",
            "password" => "1234"
        ]);
        $user->assignRole(['Administrador', 'Autorizador SAP']);

        $user = User::create([
            'name' => "Humberto",
            'username' => "Humberto",
            "email" => "compras@norson.com",
            "password" => "1234"
        ]);
        $user->assignRole(['Compras', 'Autorizador SAP']);

        $user = User::create([
            'name' => "Alex Torres",
            'username' => "proveedor",
            "email" => "provider@example.com",
            "password" => "1234"
        ]);
        $user->assignRole('Proveedor');


    }
}
