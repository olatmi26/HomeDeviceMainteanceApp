<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Spatie\Permission\Models\Role;
use \Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Permission::truncate();
        // Role::truncate();
        $roles= [
            'Super Admin',
            'Site Admin',
            'Accountant',
            'Stock Inventory',
            'Staff',
            'Customer',
            'Secertary',
            'Driver',
            'General Manager',
        ];

        $permissions= [
            'edit order',
            'create order',
            'delete order',
            'view order',
            'edit stock',
            'create stock',
            'delete stock',
            'view stock',                       
            'activate user',            
            'pan user',            
            'upload',            
            'view report',
            'download report',
        ];

        foreach ($roles as $key => $role) {
            Role::create(['name' => $role]);
        }

        foreach ($permissions as $key => $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
