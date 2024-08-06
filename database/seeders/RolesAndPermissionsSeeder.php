<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        // Employee
        Permission::create(['name'=>'Create Employee']);
        Permission::create(['name'=>'Edit Employee']);
        Permission::create(['name'=>'Manage Payroll Variables']);

        Permission::create(['name'=>'Manage Branches']);
        Permission::create(['name'=>'Manage Departments']);        
        Permission::create(['name'=>'Manage Users']);
        Permission::create(['name'=>'Manage Devices']);

        Permission::create(['name'=>'Add Deductions']);
        Permission::create(['name'=>'Edit Deductions']);
        Permission::create(['name'=>'Approve Deductions']);      
        Permission::create(['name'=>'Void Deductions']);
        
        

        
        $role = Role::create(['name'=>'admin']);
        $role->givePermissionTo('Create Employee');
        $role->givePermissionTo('Edit Employee');
        $role->givePermissionTo('Manage Payroll Variables');
        $role->givePermissionTo('Manage Branches');
        $role->givePermissionTo('Manage Departments');
        $role->givePermissionTo('Manage Users');
        $role->givePermissionTo('Manage Devices');
        $role->givePermissionTo('Add Deductions');
        $role->givePermissionTo('Edit Deductions');
        $role->givePermissionTo('Approve Deductions');
        $role->givePermissionTo('Void Deductions');

        
    }
}
