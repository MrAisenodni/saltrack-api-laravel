<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        return $this->call([
            CountrySeeder::class,
            ProvinceSeeder::class,
            CitySeeder::class,
            DistrictSeeder::class,
            WardSeeder::class,
        ]);
    }
}
