<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Vider les tables
        DB::table('role_has_permissions')->truncate();
        DB::table('model_has_roles')->truncate();
        DB::table('model_has_permissions')->truncate();
        DB::table('roles')->truncate();
        DB::table('permissions')->truncate();

        // Créer les permissions
        $permissions = [
            'view evenements',
            'edit evenements',
            'delete evenements',
            'create evenements',
            'view user',
            'edit user',
            'delete user',
            'create user',
            'view associations',
            'edit associations',
            'delete associations',
            'create associations',
            'view roles',
            'edit roles',
            'delete roles',
            'create roles',
            'view permissions',
            'edit permissions',
            'delete permissions',
            'create permissions',
            'view reservations',
            'edit reservations',
            'delete reservations',
            'create reservations',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Créer les rôles
        $superAdminRole = Role::create(['name' => 'super_admin']);
        $adminRole = Role::create(['name' => 'admin']);
        $associationRole = Role::create(['name' => 'association']);
        $userRole = Role::create(['name' => 'user']);

        // Attribution des permissions aux rôles
        $superAdminPermissions = [
            'view evenements', 'edit evenements', 'delete evenements', 'create evenements',
            'view user', 'edit user', 'delete user', 'create user',
            'view associations', 'edit associations', 'delete associations', 'create associations',
            'view roles', 'edit roles', 'delete roles', 'create roles',
            'view reservations', 'edit reservations', 'delete reservations', 'create reservations',
            'view permissions', 'edit permissions', 'delete permissions', 'create permissions',
        ];

        $adminPermissions = [
            'view evenements', 'edit evenements', 'delete evenements', 'create evenements',
            'view user', 'edit user', 'delete user', 'create user',
            'view associations', 'edit associations', 'delete associations', 'create associations',
            'view reservations', 'edit reservations', 'delete reservations', 'create reservations',
        ];

        $associationPermissions = [
            'view evenements', 'edit evenements', 'create evenements',
            'view reservations', 'edit reservations', 'create reservations',
        ];

        $userPermissions = [
            'view evenements', 'view reservations', 'create reservations',
        ];

        $superAdminRole->syncPermissions($superAdminPermissions);
        $adminRole->syncPermissions($adminPermissions);
        $associationRole->syncPermissions($associationPermissions);
        $userRole->syncPermissions($userPermissions);
    }
}
// namespace Database\Seeders;

// use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
// use Spatie\Permission\Models\Role;
// use Spatie\Permission\Models\Permission;

// class RoleSeeder extends Seeder
// {
//     public function run()
//     {
//         // Désactiver les vérifications de clé étrangère
//         DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

//         // Vider les tables
//         DB::table('role_has_permissions')->truncate();
//         DB::table('model_has_roles')->truncate();
//         DB::table('model_has_permissions')->truncate();
//         DB::table('roles')->truncate();
//         DB::table('permissions')->truncate();

//         // Réactiver les vérifications de clé étrangère
//         DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

//         // Créer les permissions
//         $permissions = [
//             'view evenements',
//             'edit evenements',
//             'delete evenements',
//             'create evenements',
//             'view user',
//             'edit user',
//             'delete user',
//             'create user',
//             'view associations',
//             'edit associations',
//             'delete associations',
//             'create associations',
//             'view roles',
//             'edit roles',
//             'delete roles',
//             'create roles',
//             'view permissions',
//             'edit permissions',
//             'delete permissions',
//             'create permissions',
//             'view reservations',
//             'edit reservations',
//             'delete reservations',
//             'create reservations',
//         ];

//         foreach ($permissions as $permission) {
//             Permission::create(['name' => $permission]);
//         }

//         // Créer les rôles
//         $superAdminRole = Role::create(['name' => 'super_admin']);
//         $adminRole = Role::create(['name' => 'admin']);
//         $associationRole = Role::create(['name' => 'association']);
//         $userRole = Role::create(['name' => 'user']);

//         // Attribution des permissions aux rôles
//         $superAdminPermissions = [
//             'view evenements', 'edit evenements', 'delete evenements', 'create evenements',
//             'view user', 'edit user', 'delete user', 'create user',
//             'view associations', 'edit associations', 'delete associations', 'create associations',
//             'view roles', 'edit roles', 'delete roles', 'create roles',
//             'view reservations', 'edit reservations', 'delete reservations', 'create reservations',
//             'view permissions', 'edit permissions', 'delete permissions', 'create permissions',
//         ];

//         $adminPermissions = [
//             'view evenements', 'edit evenements', 'delete evenements', 'create evenements',
//             'view user', 'edit user', 'delete user', 'create user',
//             'view associations', 'edit associations', 'delete associations', 'create associations',
//             'view reservations', 'edit reservations', 'delete reservations', 'create reservations',
//         ];

//         $associationPermissions = [
//             'view evenements', 'edit evenements', 'create evenements',
//             'view reservations', 'edit reservations', 'create reservations',
//         ];

//         $userPermissions = [
//             'view evenements', 'view reservations', 'create reservations',
//         ];

//         $superAdminRole->syncPermissions($superAdminPermissions);
//         $adminRole->syncPermissions($adminPermissions);
//         $associationRole->syncPermissions($associationPermissions);
//         $userRole->syncPermissions($userPermissions);
//     }
// }

