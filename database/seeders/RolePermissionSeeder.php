<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Roles
        $RoleSuperAdmin = Role::findOrCreate('superadmin','web');
        Role::findOrCreate('admin','web');
        Role::findOrCreate('member','web');
        Role::findOrCreate('accountant','web');
        Role::findOrCreate('hrm','web');
        Role::findOrCreate('client','web');

        //Permission list Array

        $permissions = [
          
            //dashboard Permission
            'dashboard.view',
            'dashboard.create',
            'dashboard.update',
            'dashboard.delete',
			
			//project dashboard Permission
            'projectdashboard.view',
            'projectdashboard.create',
            'projectdashboard.update',
            'projectdashboard.delete',

            //Role Permission
            'role.view',
            'role.create',
            'role.update',
            'role.delete',

            //Settings
            'settings.view',
            'settings.create',
            'settings.update',
            'settings.delete',

            //Role Permission
            'module.view',
            'module.create',
            'module.update',
            'module.delete',

            //Clean Cache
            'cache.view',
            'cache.create',
        ];


        $allPermissions = Permission::all();
    
        //Create & Assign Permissions
        foreach($permissions as $permission){
            //Create Permission
            $permission = Permission::findOrCreate($permission,'web');
            $RoleSuperAdmin->givePermissionTo($permission);
            $permission->assignRole($RoleSuperAdmin);
        }

    }
}
