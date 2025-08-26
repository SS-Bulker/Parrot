<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use \App\Models\User;

class RolePermissionSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        // Crear permisos
        $permissions = [
            'create articles',
            'edit articles',
            'delete articles',
        ];

        foreach ($permissions as $perm) {
            Permission::firstOrCreate(['name' => $perm, 'guard_name' => 'web']);
        }

        // Crear roles y asignar permisos
        $admin = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
        $editor = Role::firstOrCreate(['name' => 'editor', 'guard_name' => 'web']);
        $user = Role::firstOrCreate(['name' => 'user', 'guard_name' => 'web']);

        $admin->givePermissionTo(Permission::all());
        $editor->givePermissionTo(['create articles', 'edit articles']);

        // Asignar rol admin al usuario 1
        $usuario = User::find(1);

        if ($usuario) {
            $usuario->assignRole($admin);
        }
    }
}
