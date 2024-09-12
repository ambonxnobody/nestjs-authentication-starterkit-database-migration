<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PermissionRole extends Pivot
{
    use HasUuids;

    protected $table = 'permission_role';

    public $timestamps = true;
}
