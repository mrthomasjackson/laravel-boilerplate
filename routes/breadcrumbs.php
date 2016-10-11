<?php
// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Home', url('/home'));
});

// Admin
Breadcrumbs::register('admin', function($breadcrumbs)
{
    $breadcrumbs->push('Admin', url('/admin'));
});

// Admin > Users
Breadcrumbs::register('users', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('Users', url('/admin/users'));
});

// Admin > Users > {User}
Breadcrumbs::register('user', function($breadcrumbs, $user)
{
    $breadcrumbs->parent('users');
    $breadcrumbs->push($user->name, url('/admin/users/'.$user->id));
});

// Admin > Roles
Breadcrumbs::register('roles', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('Roles', url('/admin/roles'));
});

// Admin > Roles > {Role}
Breadcrumbs::register('role', function($breadcrumbs, $role)
{
    $breadcrumbs->parent('roles');
    $breadcrumbs->push($role->name, url('/admin/roles/'.$role->id));
});

// Admin > Permissions
Breadcrumbs::register('permissions', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('Permissions', url('/admin/permissions'));
});

// Admin > Permissions > {Permission}
Breadcrumbs::register('permission', function($breadcrumbs, $permission)
{
    $breadcrumbs->parent('permissions');
    $breadcrumbs->push($permission->name, url('/admin/permissions/'.$permission->id));
});