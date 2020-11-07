<?php

namespace Database\Seeders;

use App\Models\Society;
use Illuminate\Database\Seeder;

class SocietiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Society::query()->delete();
        
        $data = [
            [
                "code" => "1000",
                "description" => "PC",
                "orden" => 2
            ],            
            [
                "code" => "2000",
                "description" => "FR",
                "orden" => 1
            ],
            [
                "code" => "3000",
                "description" => "ASA",
                "orden" => 3
            ],
            [
                "code" => "3100",
                "description" => "IA",
                "orden" => 4
            ],
            [
                "code" => "3200",
                "description" => "AF",
                "orden" => 7
            ],
            [
                "code" => "3300",
                "description" => "FS",
                "orden" => 5
            ],
            [
                "code" => "3400",
                "description" => "SAA",
                "orden" => 8
            ],
            [
                "code" => "4000",
                "description" => "NH",
                "orden" => 6
            ],
        ];

        foreach ($data as $value) {
            Society::create($value);
        }

    }
}
