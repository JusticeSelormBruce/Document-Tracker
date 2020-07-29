<?php

use App\Departments;
use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Departments::create(
           [
               "short_name"=>"ICT",
               "long_name"=>" ICT Directorate"
           ]
       );
    }
}
