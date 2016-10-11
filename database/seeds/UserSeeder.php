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
        // Create Administrator Role
        $administratorRole = \App\Role::create([
            'role' => 'Administrator'
        ]);

        // Create User Role
        $userRole = \App\Role::create([
            'role' => 'User'
        ]);

        // Create Permission To Manage Users
        $manageUserPermission = \App\Permission::create([
            'permission' => 'Manage Users'
        ]);

        // Create User With Administrative Rights
        $administratorUser = \App\User::create([
            'name' => 'Administrator',
            'email' => 'administrator@email.com',
            'password' => bcrypt('Welcome1'),
            'role_id' => $administratorRole->id
        ]);

        // If the administrator does not have the 'Manage Users' permission, add it to the relationship.
        if (!$administratorUser->permissions->contains($manageUserPermission->id)){
            $administratorUser->permissions()->attach($manageUserPermission->id);
        }

        print 'User has been created \n';
        print 'Name: ' . $administratorUser->name . ' \n';
        print 'Username: ' . $administratorUser->email . ' \n';
        print 'Password: Welcome1  \n';
        print 'Role:' . $administratorUser->role->role . '\n';
        foreach ($administratorUser->permissions as $permission){
            print 'Permission:' . $administratorUser->permission->permission . '\n';
        }
    }
}
