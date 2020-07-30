<?php

use App\Routes;
use Illuminate\Database\Seeder;

class RouteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Routes::create([
        //     'name' => 'Roles',
        //     'route' => '/admin/role-index'
        // ]);
        Routes::create([
            'name' => 'Departments',
            'route' => '/admin/department-index'
        ]);
        Routes::create([
            'name' => 'Privilege',
            'route' => '/admin/assign-privilege-index'
        ]);
        Routes::create([
            'name' => 'User Account',
            'route' => '/admin/user-accounts-index'
        ]);
        Routes::create([
            'name' => 'Offices',
            'route' => '/admin/offices-index'
        ]);
        Routes::create([
            'name' => 'Incoming',
            'route' => '/incoming-index'
        ]);
        Routes::create([
            'name' => 'Dispatch',
            'route' => '/dispatch-index'
        ]);
        Routes::create([
            'name' => 'Tracking',
            'route' => '/tracking-index'
        ]);
        Routes::create([
            'name' => 'Reset Password',
            'route' => '/admin/reset-password'
        ]);
        Routes::create([
            'name' => 'Change Password',
            'route' => '/change-password-index'
        ]);
    }
}
