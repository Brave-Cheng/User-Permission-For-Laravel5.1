@extends('_layout.backend._login')
@section('title') 物流运营管理系统 @stop
@section('login')
<div class="login-box-body">
    <p class="login-box-msg">登录进入管理平台</p>
    @if (count($errors) > 0)
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-ban"></i> 警告!</h4>
        <p>{!! $errors->first('attempt') !!}</p>
    </div>
    @endif
    <form action="{{ route('login') }}" method="post" accept-charset="utf-8">
        {!! csrf_field() !!}
        <div class="form-group has-feedback">
            <input type="text" class="form-control" maxlength="20" name="name" placeholder="用户名"/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" maxlength="20" name="password" placeholder="登录密码"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div>
            <hr/>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
            </div>
        </div>
    </form>
</div>
@stop
