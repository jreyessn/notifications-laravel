<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RetentionCountry;

class RetentionCountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RetentionCountry::query()->delete();
        
        $data = [
            [
                "description" => "MXN"
            ],            
            [
                "description" => "USA"
            ],
            [
                "description" => "OTRO"
            ],
        ];
        
        foreach ($data as $value) {
            RetentionCountry::create($value);
        }
        
    }
}
