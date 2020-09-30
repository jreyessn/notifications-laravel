<?php

namespace Database\Seeders;

use App\Models\BankCountry;
use Illuminate\Database\Seeder;

class BankCountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        BankCountry::query()->delete();
        
        $data = [
          [
             "description" => "MX",
          ], 
          [
            "description" => "US",
          ],  
          [
            "description" => "EU",
          ]  
        ];
        
        foreach ($data as $value) {
          BankCountry::create($value);
        }

    }
}
