<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Spatie\Permission\Models\Permission;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Spatie\Permission\Models\Permission>
 */
class PermissionFactory extends Factory {
    protected $model = Permission::class;

    public function definition(): array {
        return [
            'name' => $this->faker->unique()->randomElement([
                'create articles',
                'edit articles',
                'delete articles'
            ]),
            'guard_name' => 'web',
        ];
    }
}
