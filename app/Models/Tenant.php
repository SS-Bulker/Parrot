<?php

namespace App\Models;

use Spatie\Multitenancy\Models\Tenant as BaseTenant;

class Tenant extends BaseTenant {

    protected $fillable = ['name', 'domain', 'database'];

    public function users() {
        return $this->belongsToMany(User::class, 'tenant_user');
    }
}
