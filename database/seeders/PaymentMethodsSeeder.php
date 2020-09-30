<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;

class PaymentMethodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentMethod::query()->delete();
        
        $data = [
            [
                "code" => "T",
                "description" => "Transferencia",
                "default" => 1
            ],            
            [
                "code" => "CH",
                "description" => "Cheque"
            ],
        ];

        foreach ($data as $value) {
            PaymentMethod::create($value);
        }

    }
}
