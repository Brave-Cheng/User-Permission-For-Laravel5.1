@extends('_layout.backend._login')
@section('title') 物流运营管理系统 @stop
@section('login')
<div class="login-box-body">
    <p class="login-box-msg">账号注册</p>
    @if (count($errors) > 0)
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-ban"></i> 警告!</h4>
        <p>{!! $errors->first('attempt') !!}</p>
    </div>
    @endif
    <form method="POST" action="{{ route('register') }}">
        {!! csrf_field() !!}
        <div>
            用户名
            <input type="text" name="name" value="{{ old('name') }}">
        </div>
        <div>
            Email
            <input type="email" name="email" value="{{ old('email') }}">
        </div>
        <div>
            密码
            <input type="password" name="password">
        </div>
        <div>
            确认密码
            <input type="password" name="password_confirmation">
        </div>
        <div>
            <button type="submit">注册</button>
        </div>
    </form>
</div>
@stop
