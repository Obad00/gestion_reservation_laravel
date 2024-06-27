<?php


namespace Database\Seeders;

// database/seeders/RoleSeeder.php
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::truncate();
        // Create roles
        $roleUser = Role::create(['name' => 'user']);
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleSuperAdmin = Role::create(['name' => 'super_admin']);
        $roleAssociation = Role::create(['name' => 'association']);

        // Create permissions
        Permission::truncate();

        Permission::create(['name' => 'manage associations']);
        Permission::create(['name' => 'manage events']);
        Permission::create(['name' => 'view events']);
        Permission::create(['name' => 'reserve events']);

        // Assign permissions to roles
        $roleAdmin->givePermissionTo('manage associations');
        $roleSuperAdmin->givePermissionTo(['manage associations', 'manage events']);
        $roleAssociation->givePermissionTo(['manage events', 'view events']);
        $roleUser->givePermissionTo('view events');
        $roleUser->givePermissionTo('reserve events');
    }
}
