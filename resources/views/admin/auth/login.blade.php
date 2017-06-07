<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>{{config('app.name')}}后台管理系统</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="{{asset('admin/css/x-admin.css')}}" media="all">
</head>

<body style="background-color: #393D49">
<div class="x-box">
    <div class="x-top">
    </div>
    <div class="x-mid">
        <div class="x-avtar">
            <img src="{{asset('admin/images/logo.png')}}" alt="">
        </div>
        <div class="input">
            <form class="layui-form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="layui-form-item x-login-box">
                    <label for="username" class="layui-form-label">
                        <i class="layui-icon">&#xe612;</i>
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="username" name="username" required="" lay-verify="username"
                               autocomplete="off" placeholder="username" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item x-login-box">
                    <label for="pass" class="layui-form-label">
                        <i class="layui-icon">&#xe628;</i>
                    </label>
                    <div class="layui-input-inline">
                        <input type="password" id="pass" name="password" required="" lay-verify="password"
                               autocomplete="off" placeholder="******" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item" id="loginbtn">
                    <button type="submit"  class="layui-btn" lay-filter="save" lay-submit="">
                        登 录
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<p style="color:#fff;text-align: center;">Copyright © 2017.Company name All rights X-admin </p>
<script src="{{asset('admin/lib/layui/layui.js')}}" charset="utf-8">
</script>
<script>
    layui.use(['form'],
            function() {
                $ = layui.jquery;
                var form = layui.form(),
                        layer = layui.layer;


            });

</script>
</body>

</html>