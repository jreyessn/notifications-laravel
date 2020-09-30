<?php

namespace Database\Seeders;

use App\Models\ToleranceGroup;
use Illuminate\Database\Seeder;

class ToleranceGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ToleranceGroup::query()->delete();
        
        $data = [
            [
                "code" => "1000",
                "description" => "PC"
            ],            
            [
                "code" => "2000",
                "description" => "FR"
            ],
            [
                "code" => "3000",
                "description" => "ASA"
            ],
            [
                "code" => "3100",
                "description" => "IA"
            ],
            [
                "code" => "3200",
                "description" => "AF"
            ],
            [
                "code" => "3300",
                "description" => "FS"
            ],
            [
                "code" => "3400",
                "description" => "SAA"
            ],
        ];

        foreach ($data as $value) {
            ToleranceGroup::create($value);
        }
    }
}
