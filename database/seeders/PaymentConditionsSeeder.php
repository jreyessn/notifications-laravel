<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaymentCondition;

class PaymentConditionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentCondition::query()->delete();
        
        $data = [
            [
                "code" => "P000",
                "description" => "Pago Inmediato"
            ],            
            [
                "code" => "P001",
                "description" => "Pago a 1 días"
            ],
            [
                "code" => "P005",
                "description" => "Pago a 5 días"
            ],
            [
                "code" => "P007",
                "description" => "Pago a 7 días"
            ],
            [
                "code" => "P010",
                "description" => "Pago a 10 días"
            ],
            [
                "code" => "P015",
                "description" => "Pago a 15 días"
            ],
            [
                "code" => "P020",
                "description" => "Pago a 20 días"
            ],
            [
                "code" => "P030",
                "description" => "Pago a 30 días",
                "default" => 1
            ],
            [
                "code" => "P045",
                "description" => "Pago a 45 días",
            ],
            [
                "code" => "P060",
                "description" => "Pago a 60 días",
            ],
            [
                "code" => "P090",
                "description" => "Pago a 90 días",
            ],
        ];

        foreach ($data as $value) {
            PaymentCondition::create($value);
        }

    }
}
