<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administratorRole = \App\Role::create([
            'role' => 'Administrator'
        ]);

        $userRole = \App\Role::create([
            'role' => 'User'
        ]);

        $administratorUser = \App\User::create([
            'name' => 'Administrator',
            'email' => 'administrator@email.com',
            'password' => bcrypt('Welcome1'),
            'role_id' => $administratorRole->id
        ]);

        print 'User has been created \n';
        print 'Name: ' . $administratorUser->name . ' \n';
        print 'Username: ' . $administratorUser->email . ' \n';
        print 'Password: Welcome1  \n';
        print 'Role:' . $administratorUser->role->role . '\n';
    }
}
