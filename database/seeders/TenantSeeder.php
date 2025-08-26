<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Tenant;

class TenantSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        // crear un tenant de prueba
        $tenant = Tenant::firstOrCreate(
            ['name' => 'Empresa Demo', 'domain' => 'demo.localhost', 'database' => 'empresa_demo',],
        );

        $task = new \App\Tasks\CreateTenantDatabaseTask();
        $task->makeCurrent($tenant);

        // buscar usuario global id = 1
        $user = User::find(1);

        // asignar tenant al usuario
        if ($user) {
            $user->tenants()->syncWithoutDetaching([$tenant->id]);
        }
    }
}
