<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'admin']);
        $supplier = Role::create(['name' => 'supplier']);

        Permission::create(['name' => 'manage-suppliers']);
        Permission::create(['name' => 'manage-clients']);

        $admin->givePermissionTo('manage-clients');
        $supplier->givePermissionTo('manage-suppliers');

        $user1 = User::find(1);
        $user1->assignRole('admin');

        $user2 = User::find(2);
        $user2->assignRole('supplier');
    }
}
