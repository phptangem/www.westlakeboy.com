<?php
namespace  App\Repositories\Frontend\Access\User;

interface UserRepositoryContract
{
    public function create(array $data,$provider = false);
}