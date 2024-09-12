<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasUuids;

    protected $fillable = [
        'name',
        'description',
    ];

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class)->using(PermissionRole::class)->withTimestamps();
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->using(RoleUser::class)->withTimestamps();
    }

    public function assignPermission(string $permission): void
    {
        $this->permissions()->attach(Permission::where('name', $permission)->first());
    }
}
