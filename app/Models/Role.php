<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DirectoryTree\Authorization\Traits\ManagesPermissions;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Role extends Model
{
    use HasUuids;
    use ManagesPermissions;

    protected $fillable = [
        'name',
        'label',
    ];
}
