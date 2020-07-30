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
            "role_id"=>"[1,2,3,4,5,6,7,8,9]"
        ]);
        User::whereId(1)->update(['user_role_id'=>1]);
    }
}
