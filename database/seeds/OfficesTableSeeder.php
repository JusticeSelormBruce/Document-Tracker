<?php

use App\Offices;
use Illuminate\Database\Seeder;

class OfficesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Offices::create(
            [
                "name"=>"Main Office",
                "departments_id"=> 1
            ]
        );
    }
}
