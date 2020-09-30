<?php

namespace Database\Seeders;

use App\Models\Organization;
use Illuminate\Database\Seeder;

class OrganizationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Organization::query()->delete();
        
        $data = [
            [
                "code" => "1000",
                "description" => "Foods"
            ],            
            [
                "code" => "2000",
                "description" => "Farms"
            ],
        ];

        foreach ($data as $value) {
            Organization::create($value);
        }

    }
}
