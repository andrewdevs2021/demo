<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            ['name' => 'United States'],
            ['name' => 'United Kingdom'],
            ['name' => 'Canada'],
            ['name' => 'Australia'],
            ['name' => 'France'],
        ];

        DB::table('countries')->insert($countries);
    }
}
