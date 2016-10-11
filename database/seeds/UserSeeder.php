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

        // Create Permission To Manage Roles
        $manageRoles = \App\Permission::create([
            'permission' => 'Manage Roles'
        ]);

        // Create Permission To Manage Permissions
        $managePermissions = \App\Permission::create([
            'permission' => 'Manage Permissions'
        ]);

        // Create User With Administrative Rights
        $administratorUser = \App\User::create([
            'name' => 'Administrator',
            'email' => 'administrator@email.com',
            'password' => bcrypt('Welcome1'),
            'role_id' => $administratorRole->id
        ]);

        // Attach 'Manage Users' permission, to the administrative user.
        $administratorUser->permissions()->attach($manageUserPermission->id);
        $administratorUser->permissions()->attach($manageRoles->id); // manage roles
        $administratorUser->permissions()->attach($managePermissions->id); // manage permissions

        // Print out results
        print "User has been created \n\r";
        print "Name: " . $administratorUser->name . " \n\r";
        print "Username: " . $administratorUser->email . " \n\r";
        print "Password: Welcome1  \n\r";
        print "Role: " . $administratorUser->role->role . "\n\r";
        foreach ($administratorUser->permissions as $permission) {
            print "Permission: " . $permission->permission . "\n\r";
        }
    }
}
