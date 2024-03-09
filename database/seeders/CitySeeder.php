<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            ['name' => 'New York', 'country_id' => 1],
            ['name' => 'Los Angeles', 'country_id' => 1],
            ['name' => 'Chicago', 'country_id' => 1],
            ['name' => 'London', 'country_id' => 2],
            ['name' => 'Manchester', 'country_id' => 2],
            ['name' => 'Birmingham', 'country_id' => 2],
            ['name' => 'Toronto', 'country_id' => 3],
            ['name' => 'Montreal', 'country_id' => 3],
            ['name' => 'Vancouver', 'country_id' => 3],
            ['name' => 'Sydney', 'country_id' => 4],
            ['name' => 'Melbourne', 'country_id' => 4],
            ['name' => 'Brisbane', 'country_id' => 4],
            ['name' => 'Paris', 'country_id' => 5],
            ['name' => 'Marseille', 'country_id' => 5],
            ['name' => 'Lyon', 'country_id' => 5],
        ];

        DB::table('cities')->insert($cities);
    }
}
