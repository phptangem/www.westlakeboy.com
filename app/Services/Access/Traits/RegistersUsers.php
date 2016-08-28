<?php

namespace App\Services\Access\Traits;

use App\Http\Requests\Frontend\Auth\RegisterRequest;

trait RegistersUsers
{
    use RedirectsUsers;

    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('frontend.auth.register');
    }

    public function register(RegisterRequest $request)
    {
        //参数验证
        //参数接受
        dd($request);
        //注册入库
        //页面重定向
    }
}