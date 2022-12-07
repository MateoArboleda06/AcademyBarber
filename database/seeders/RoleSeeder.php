<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Student']);
        $role3 = Role::create(['name' => 'Teacher']);

        //Permisos admin

        Permission::create(['name' => 'admin.home'])->assignRole($role1);

        Permission::create(['name' => 'admin.users.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.users.edit'])->assignRole($role1);
        Permission::create(['name' => 'admin.users.update'])->assignRole($role1);

        Permission::create(['name' => 'admin.courses.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.courses.create'])->assignRole($role1);
        Permission::create(['name' => 'admin.courses.edit'])->assignRole($role1);
        Permission::create(['name' => 'admin.courses.destroy'])->assignRole($role1);

        Permission::create(['name' => 'admin.groups.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.groups.create'])->assignRole($role1);
        Permission::create(['name' => 'admin.groups.edit'])->assignRole($role1);
        Permission::create(['name' => 'admin.groups.destroy'])->assignRole($role1);

        Permission::create(['name' => 'form_asigned'])->assignRole($role1);
        Permission::create(['name' => 'list_students'])->assignRole($role1);

        //Permisos estudiante

        Permission::create(['name' => 'course.index'])->assignRole($role2);     
        Permission::create(['name' => 'student.index'])->assignRole($role2);     
    }
}
