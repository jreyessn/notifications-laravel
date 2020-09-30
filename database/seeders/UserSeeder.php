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

        User::create([
            'name' => "Juan Reyes",
            "email" => "snjuank@gmail.com",
            "password" => bcrypt("1234")
        ]);

    }
}
