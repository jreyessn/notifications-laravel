<?php

namespace Database\Seeders;

use App\Models\RawMeatMaterial;
use Illuminate\Database\Seeder;

class RawMeatMaterialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RawMeatMaterial::query()->delete();
        
        $data = [
            [
                "code" => "J01",
                "description" => "MP Carnicos"
            ],            
            [
                "code" => "J02",
                "description" => "MP Cerdo Vivo"
            ],
        ];

        foreach ($data as $value) {
            RawMeatMaterial::create($value);
        }

    }
}
