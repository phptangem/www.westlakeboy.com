<?php
namespace  App\Repositories\Frontend\Access\User;

use App\Models\Access\User\User;

class EloquentUserRepository implements UserRepositoryContract
{
    public function create(array $data , $provider = false)
    {
        if($provider){

        }else{
            $user = User::create([
                'name'              => $data['name'],
                'email'             => $data['email'],
                'password'          => bcrypt($data['password']),
                'confirmation_code' => md5(uniqid(mt_rand(),true)),
                'confirmed'         => config('access.users.confirm_email'),
                'status'            => 1
            ]);
        }

        //赋予默认权限
        $user->attachRoles($this->defaultRoles());

        //发送邮件
    }
}