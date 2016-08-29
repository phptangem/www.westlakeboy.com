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
        //注册入库
        if(config('access.users.confirm_email')){
            $user = $this->user->create($request->all());
            event(new UserRegistered($user));
            return redirect()->route('frontend.index')->withFlashSuccess('');
        }else{
            Auth()->login($this->user->create($request->all()));
            event(new UserRegistered(access()->user()));
            return redirect($this->redirectPath());
        }
        //页面重定向
    }
}