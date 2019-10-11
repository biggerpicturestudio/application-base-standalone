<?php

namespace StudioSidekicks\Auth\Back\Repositories;

use StudioSidekicks\Auth\Back\Contracts\RoleRepositoryContract;
use Cartalyst\Sentinel\Roles\IlluminateRoleRepository;
use StudioSidekicks\Auth\Back\Entities\Role;

class RoleRepository extends IlluminateRoleRepository implements RoleRepositoryContract
{
    /**
     * The Eloquent role model FQCN.
     *
     * @var string
     */
    protected $model = Role::class;
}