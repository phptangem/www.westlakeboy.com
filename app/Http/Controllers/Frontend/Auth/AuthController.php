<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Repositories\Frontend\Access\User\UserRepositoryContract;
use App\Services\Access\Traits\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    use AuthenticatesAndRegistersUsers;


    public function __construct(UserRepositoryContract $user)
    {
        $this->user = $user;
    }
}
