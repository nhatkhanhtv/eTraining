<?php

namespace App\Permissions;

use App\Role;
use App\Permission;

trait HasPermissionsTrait
{
    public function givePermissionsTo(...$permissions)
    {
        $permissions = $this->getAllPermission($permissions);
        dd($permissions);
        if ($permissions === null) {
            return $this;
        }
        $this->permissions()->saveMany($permissions);
        return $this;
    }

    // public 

    public function hasRole(...$roles)
    {
        foreach ($roles as $role) {
            if ($this->roles->contains('label', $role)) {
                return true;
            }
        }
        return false;
    }

    public function roles()
    {
        return $this->belongToMany(Role::class)->withTimeStamp();
    }

    public function permissions()
    {
        return $this->belongToMany(Permission::class)->withTimeStamp();
    }

    protected function hasPermission($permission)
    {
        return (bool) $this->permissions->where('label', $permission->label)->count();
    }

    protected function getAllPermissions(array $permissions)
    {
        return Permission::whereIn('label', $permissions)->get();
    }
}
