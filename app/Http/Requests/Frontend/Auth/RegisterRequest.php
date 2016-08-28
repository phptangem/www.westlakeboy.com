<?php

namespace App\Http\Requests\Frontend\Auth;

use App\Http\Requests\Request;

class RegisterRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'      => 'required|max:255',
            'email'     => 'required|email|max:255|unique:users',
            'password'  => 'required|confirmed|min:6'
        ];
    }

    public function attributes()
    {
        return [
            'name'              => '用户名',
            'email'             => '邮箱',
            'password'          => '密码'
        ];
    }
}
