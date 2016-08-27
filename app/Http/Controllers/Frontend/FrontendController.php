<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Access\User\User;
class FrontendController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.index');
    }
    /**
     * 测试
     */
    public function test()
    {
//        $carbon = new Carbon();
//        $user = new User;
//        $user->name                 = 'tangem';
//        $user->email                = '328848822@qq.com';
//        $user->password             = '123456';
//        $user->confirmation_code    = '111111';
//        $user->confirmed            = '1';
//        $user->remember_token       = 'msdfasdf';
//        $user->created_at           = 111111;
//        $user->updated_at           = $carbon;
//        $user->deleted_at           = $carbon;
//        $user->save();
//        $user = User::where('id',11)->first();
//        dd($user->toJson());
//        dd($user->created_at,$user->updated_at,$user->deleted_at);
    }
}
