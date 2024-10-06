<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'create-user']);
        Permission::create(['name' => 'edit-user']);
        Permission::create(['name' => 'delete-user']);
        Permission::create(['name' => 'show-user']);

        Permission::create(['name' => 'create-writing']);
        Permission::create(['name' => 'edit-writing']);
        Permission::create(['name' => 'delete-writing']);
        Permission::create(['name' => 'show-writing']);

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'writing']);

        // artinya kita memberi permission create-user ke role admin
        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('create-user');
        $roleAdmin->givePermissionTo('edit-user');
        $roleAdmin->givePermissionTo('delete-user');
        $roleAdmin->givePermissionTo('show-user');

        $roleWriting = Role::findByName('writing');
        $roleWriting->givePermissionTo('create-writing');
        $roleWriting->givePermissionTo('edit-writing');
        $roleWriting->givePermissionTo('delete-writing');
        $roleWriting->givePermissionTo('show-writing');

    }
}
