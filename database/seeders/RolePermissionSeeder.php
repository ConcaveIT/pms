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
            'dashboard.edit',
            'dashboard.delete',
			
			//project dashboard Permission
            'projectdashboard.view',
            'projectdashboard.create',
            'projectdashboard.edit',
            'projectdashboard.delete',

            //Customer Account Permission
            'member.view',
            'member.create',
            'member.edit',
            'member.delete',
			
			//Client Permission
            'client.view',
            'client.create',
            'client.edit',
            'client.delete',
			
		    //Department Permission
            'department.view',
            'department.create',
            'department.edit',
            'department.delete',
			
			//Task Permission
            'task.view',
            'task.create',
            'task.edit',
            'task.delete',
			
			//Project Permission
            'project.view',
            'project.create',
            'project.edit',
            'project.delete',

            //Role Permission
            'role.view',
            'role.create',
            'role.edit',
            'role.delete',

            //Settings
            'settings.view',
            'settings.create',
            'settings.edit',
            'settings.delete',

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
