<?php

namespace Database\Seeders;

use App\Models\FixedAsset;
use Illuminate\Database\Seeder;

class FixedAssetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        FixedAsset::query()->delete();
        
        $data = [
            [
                "code" => "N01",
                "description" => "Proyectos"
            ],            
            [
                "code" => "N02",
                "description" => "Inversiones Operativas"
            ],
            [
                "code" => "N03",
                "description" => "Pie de Cria"
            ],
        ];

        foreach ($data as $value) {
            FixedAsset::create($value);
        }

    }
}
