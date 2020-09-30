<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OfficialsEmployee;

class OfficialsEmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OfficialsEmployee::query()->delete();
        
        $data = [
            [
                "code" => "F01",
                "description" => "Fonacot"
            ],            
            [
                "code" => "F02",
                "description" => "Uniformes"
            ],
            [
                "code" => "F03",
                "description" => "Cortesías Personal"
            ],
            [
                "code" => "F04",
                "description" => "Prestamos Personal"
            ],
            [
                "code" => "F05",
                "description" => "Reembolso de gastos"
            ],
            [
                "code" => "F06",
                "description" => "Sueldos y Salarios"
            ],
        ];

        foreach ($data as $value) {
            OfficialsEmployee::create($value);
        }

    }
}
