<?php

namespace App\Providers;

use App\Models\Permission;
use App\Models\Role;
use DirectoryTree\Authorization\Authorization;
use Illuminate\Support\ServiceProvider;

class AuthorizationServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Authorization::useUserModel(\App\Models\User::class);
        Authorization::useRoleModel(Role::class);
        Authorization::usePermissionModel(Permission::class);
    }
}
