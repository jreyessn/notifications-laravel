<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Currency;

class CurrenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Currency::query()->delete();

        $data = [
            [
                "code" => "MXN",
                "description" => "Peso Mexicano",
            ],
            [
                "code" => "USD",
                "description" => "Dólar Americano",
            ],
            [
                "code" => "EUR",
                "description" => "Euro",
            ],
        ];

        foreach ($data as $value) {
            Currency::create($value);
        }

    }
}
