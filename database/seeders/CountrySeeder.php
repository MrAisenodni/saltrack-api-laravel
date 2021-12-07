<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        return DB::table('countries')->insert([
            'code'          => 'ID',
            'name'          => 'Indonesia',
            'version'       => 1,
            'created_by'    => 'Developer',
            'updated_at'    => NULL,
        ]);
    }
}
