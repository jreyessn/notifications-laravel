<?php

namespace Database\Seeders;

use App\Models\RawMaterial;
use Illuminate\Database\Seeder;

class RawMaterialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RawMaterial::query()->delete();
        
        $data = [
            [
                "code" => "I01",
                "description" => "MP Molino"
            ],            
            [
                "code" => "I02",
                "description" => "MP Empaque"
            ],
            [
                "code" => "I03",
                "description" => "MP Preparados"
            ],
        ];

        foreach ($data as $value) {
            RawMaterial::create($value);
        }

    }
}
