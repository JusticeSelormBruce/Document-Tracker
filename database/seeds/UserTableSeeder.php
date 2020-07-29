<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Administrator",
            "email" => "webmaster@ktu.edu.gh",
            "password" => Hash::make("Password"),
            "dept_id" => 1,
            "office_id" => 1,
            "user_role_id" => null
        ]);
    }
}
