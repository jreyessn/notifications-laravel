<?php

namespace Database\Seeders;

use App\Models\RetentionType;
use Illuminate\Database\Seeder;

class RetentionTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RetentionType::query()->delete();
        
        $data = [
            [
                "code" => "S1",
                "description" => "ISR Arrendamientos"
            ],            
            [
                "code" => "S2",
                "description" => "ISR Honorarios"
            ],
            [
                "code" => "V1",
                "description" => "IVA Fletes"
            ],
            [
                "code" => "V2",
                "description" => "IVA Arrendamientos"
            ],
            [
                "code" => "V3",
                "description" => "IVA Honorarios"
            ],
            [
                "code" => "V6",
                "description" => "IVA por venta de desechos (100%)"
            ],
        ];

        foreach ($data as $value) {
            RetentionType::create($value);
        }

    }
}
