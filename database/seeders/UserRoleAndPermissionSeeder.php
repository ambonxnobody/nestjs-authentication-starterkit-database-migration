<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $guest = User::factory()->create([
            'email' => 'guest@gmail.com',
            'is_active' => true
        ]);

        Role::create(['name' => 'guest']);

        $guest->assignRole('guest');

        $admin = User::factory()->create([
            'email' => 'admin@gmail.com',
            'is_active' => true
        ]);

        UserProfile::factory()->create([
            'user_id' => $admin->id,
            'full_name' => 'Admin',
            'nick_name' => 'Admin'
        ]);

        $adminRole = Role::create(['name' => 'admin']);

        Permission::create(['name' => 'read:permissions']);
        Permission::create(['name' => 'write:permissions']);
        Permission::create(['name' => 'delete:permissions']);
        $adminRole->assignPermission('read:permissions');
        $adminRole->assignPermission('write:permissions');
        $adminRole->assignPermission('delete:permissions');

        Permission::create(['name' => 'read:roles']);
        Permission::create(['name' => 'write:roles']);
        Permission::create(['name' => 'delete:roles']);
        $adminRole->assignPermission('read:roles');
        $adminRole->assignPermission('write:roles');
        $adminRole->assignPermission('delete:roles');

        Permission::create(['name' => 'read:users']);
        Permission::create(['name' => 'write:users']);
        Permission::create(['name' => 'delete:users']);
        $adminRole->assignPermission('read:users');
        $adminRole->assignPermission('write:users');
        $adminRole->assignPermission('delete:users');

        $admin->assignRole('admin');

        $headmaster = User::factory()->create([
            'email' => 'headmaster@gmail.com',
            'is_active' => true
        ]);

        Role::create(['name' => 'headmaster']);

        $headmaster->assignRole('headmaster');

        $staff = User::factory()->create([
            'email' => 'staff@gmail.com',
            'is_active' => true
        ]);

        Role::create(['name' => 'staff']);

        $staff->assignRole('staff');

        $student = User::factory()->create([
            'email' => 'student@gmail.com',
            'is_active' => true
        ]);

        Role::create(['name' => 'student']);

        $student->assignRole('student');

        $parent = User::factory()->create([
            'email' => 'parent@gmail.com',
            'is_active' => true
        ]);

        Role::create(['name' => 'parent']);

        $parent->assignRole('parent');
    }
}
