<?php

namespace StudioSidekicks\Auth\Back\Repositories;

use StudioSidekicks\Auth\Back\Contracts\UserRepositoryContract;
use Cartalyst\Sentinel\Users\IlluminateUserRepository;
use StudioSidekicks\Auth\Back\Entities\BackUser;

class UserRepository extends IlluminateUserRepository implements UserRepositoryContract
{
    /**
     * The User model FQCN.
     *
     * @var string
     */
    protected $model = BackUser::class;
}