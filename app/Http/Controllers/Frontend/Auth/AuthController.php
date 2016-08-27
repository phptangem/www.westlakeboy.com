<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Services\Access\Traits\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    use AuthenticatesAndRegistersUsers;

}
