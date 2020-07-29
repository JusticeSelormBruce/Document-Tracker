<?php

use App\User;
use App\UserRoles;
use Illuminate\Database\Seeder;

class UserRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserRoles::create([
            "user_id"=>1,
            "role_id"=>"1"
        ]);
        User::whereId(1)->update(['user_role_id'=>1]);
    }
}
