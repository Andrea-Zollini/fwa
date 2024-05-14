<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DirectoryTree\Authorization\Traits\HasUsers;
use DirectoryTree\Authorization\Traits\HasRoles;
use DirectoryTree\Authorization\Traits\ClearsCachedPermissions;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Permission extends Model
{
    use HasUuids;
    use HasUsers;
    use HasRoles;
    use ClearsCachedPermissions;

    protected $fillable = [
        'name',
        'label',
    ];
}
