<?php

namespace Database\Seeders;

use App\Models\Fuel;
use Illuminate\Database\Seeder;

class FuelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fuel::query()->delete();
        
        $data = [
            [
                "code" => "C01",
                "description" => "Gasolina"
            ],            
            [
                "code" => "C02",
                "description" => "Gas L.P"
            ],
            [
                "code" => "C03",
                "description" => "Gas Natural"
            ],
        ];

        foreach ($data as $value) {
            Fuel::create($value);
        }

    }
}
