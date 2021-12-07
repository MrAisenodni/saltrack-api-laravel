<?php

namespace Database\Seeders;

use App\Models\Provinces;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use JeroenZwart\CsvSeeder\CsvSeeder;

class ProvinceSeeder extends CsvSeeder
{
    public function __construct() {
        $this->file = '/database/csv/provinces.csv';
        $this->defaults = [
            'version'       => 1,
            'created_by'    => 'Developer',
            'updated_at'    => NULL,
        ];
        $this->mapping = ['id','code','name','country_id'];
        $this->header = false;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::disableQueryLog();
        parent::run();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}