<?php

namespace Database\Seeders;

use App\Models\User as UserUser;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        UserUser::query()->delete();

        $user = UserUser::create([
            'name' => "Juan Reyes",
            'username' => "developer",
            "email" => "developer@gmail.com",
            "password" => "1234"
        ]);
        $user->assignRole(['Administrador']);

        $user = UserUser::create([
            'name' => "Jon Doe",
            'username' => "guest",
            "email" => "guest@test.com",
            "password" => "1234"
        ]);
        $user->assignRole(['Invitado']);

    }
}
