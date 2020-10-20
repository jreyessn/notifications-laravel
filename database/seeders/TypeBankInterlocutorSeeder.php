<?php

namespace Database\Seeders;

use App\Models\TypeBankInterlocutor;
use Illuminate\Database\Seeder;

class TypeBankInterlocutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeBankInterlocutor::query()->delete();

        TypeBankInterlocutor::create([
            'description' => "NORM",
            'default' => 1
        ]);
    }
}
