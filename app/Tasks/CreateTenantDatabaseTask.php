<?php

namespace App\Tasks;

use Illuminate\Support\Facades\DB;
use Spatie\Multitenancy\Contracts\IsTenant;
use Spatie\Multitenancy\Tasks\SwitchTenantTask;

class CreateTenantDatabaseTask implements SwitchTenantTask {
    public function makeCurrent(IsTenant $tenant): void {
        $dbName = $tenant->database;

        // Verificar si existe antes de crearla (PostgreSQL ejemplo)
        $exists = DB::select("SELECT 1 FROM pg_database WHERE datname = ?", [$dbName]);

        if (empty($exists)) {
            DB::statement("CREATE DATABASE \"$dbName\"");
        }
    }

    public function forgetCurrent(): void {
        // Nada que limpiar en este caso
    }
}
