<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Spatie\Permission\Models\Role;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Spatie\Permission\Models\Role>
 */
class RoleFactory extends Factory {
    protected $model = Role::class;

    public function definition(): array {
        return [
            'name' => $this->faker->unique()->randomElement([
                'admin',
                'editor',
                'user'
            ]),
            'guard_name' => 'web',
        ];
    }
}
