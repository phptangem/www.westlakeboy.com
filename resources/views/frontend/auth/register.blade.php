@extends('frontend.layouts.master')
@section('content')
    <header id="head" class="secondary"></header>

    <!-- container -->
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="{{ route('frontend.index') }}">首页</a></li>
            <li class="active">注册</li>
        </ol>

        <div class="row">

            <!-- Article main content -->
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">注册</h1>
                </header>

                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 class="thin text-center">欢迎注册账号</h3>
                            <p class="text-center text-muted">如果您已经拥有账号, 请<a href="signin.html">登录</a>完善个人信息</p>
                            <hr>

                            {!! Form::open(['url'=>'register', 'class'=>'form-horizontal']) !!}
                                <div class="top-margin">
                                    <label>用户名<span class="text-danger">*@if(isset($errors)) {{ $errors->first('name') }} @endif</span></label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="用户名">
                                </div>
                                <div class="top-margin">
                                    <label>邮箱 <span class="text-danger">*@if(isset($errors)) {{ $errors->first('email') }} @endif</span></label>
                                    <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="邮箱地址">
                                </div>

                                <div class="row top-margin">
                                    <div class="col-sm-6">
                                        <label>密码 <span class="text-danger">*@if(isset($errors)) {{ $errors->first('password') }} @endif</span></label>
                                        <input type="password" name="password" class="form-control" placeholder="密码">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>确认密码<span class="text-danger">*</span></label>
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="确认密码">
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    {{--<div class="col-lg-8">--}}
                                        {{--<label class="checkbox">--}}
                                            {{--<input type="checkbox">--}}
                                            {{--I've read the <a href="page_terms.html">Terms and Conditions</a>--}}
                                        {{--</label>--}}
                                    {{--</div>--}}
                                    <div class="col-lg-12 text-center">
                                        <button class="btn btn-action" type="submit">注册</button>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>

                </div>

            </article>
            <!-- /Article -->

        </div>
    </div>
@endsection