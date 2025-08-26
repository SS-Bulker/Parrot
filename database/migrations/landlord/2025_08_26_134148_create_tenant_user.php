<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('tenant_user', function (Blueprint $table) {
            $table->id();

            // Relación al tenant
            $table->foreignId('tenant_id')
                ->constrained()
                ->onDelete('cascade');

            // Relación al usuario global
            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade');

            $table->timestamps();

            // Evitar duplicados (un mismo user no se repite en el mismo tenant)
            $table->unique(['tenant_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('tenant_user');
    }
};
