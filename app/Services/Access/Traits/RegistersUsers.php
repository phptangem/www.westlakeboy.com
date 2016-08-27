<?php

namespace App\Services\Access\Traits;

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


}