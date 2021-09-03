<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \Spatie\Permission\Models\Role::truncate();
        // \Spatie\Permission\Models\Permission::truncate();
        $role = \Spatie\Permission\Models\Role::create(['name' => 'Accountant']);
        $role = \Spatie\Permission\Models\Role::create(['name' => 'Receivable Accountant']);
        $role = \Spatie\Permission\Models\Role::create(['name' => 'Payable Accountant']);
        $role = \Spatie\Permission\Models\Role::create(['name' => 'Cost Accountant']);
        $role = \Spatie\Permission\Models\Role::create(['name' => 'Budget Accountant']);
        $role = \Spatie\Permission\Models\Role::create(['name' => 'Inventory Accountant']);
        $role = \Spatie\Permission\Models\Role::create(['name' => 'Staff']);
        $role = \Spatie\Permission\Models\Role::create(['name' => 'Driver']);
        $role = \Spatie\Permission\Models\Role::create(['name' => 'Technicians']);
        $role = \Spatie\Permission\Models\Role::create(['name' => 'Admin']);
        $role = \Spatie\Permission\Models\Role::create(['name' => 'Secertary']);
        $role = \Spatie\Permission\Models\Role::create(['name' => 'Super-Admin']);

    }
}
