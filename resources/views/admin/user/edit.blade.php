@extends('admin.layouts.main')

@section('content')
<div class="row-content am-cf">
    <div class="row">

        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <ol class="am-breadcrumb">
                        <li><a href="{{url('home')}}" class="am-icon-home">首页</a></li>
                        <li><a href="#">用户管理</a></li>
                        <li class="am-active">编辑用户</li>
                    </ol>
                </div>
                <div class="widget-body am-fr">

                    <form class="am-form am-form-horizontal">
                        {{ csrf_field() }}
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">用户名：</label>
                            <div class="am-u-sm-3">
                                <input type="text" class="tpl-form-input" id="user-name" value="{{$user['name']}}" readonly="">
                                <small>请填写标题文字10-20字左右。</small>
                            </div>
                            <div class="am-u-sm-6"></div>
                        </div>

                        <div class="am-form-group am-form-group-sm">
                            <label for="user-email" class="am-u-sm-3 am-form-label">密码</label>
                            <div class="am-u-sm-3">
                                <input type="text" class="am-form-field tpl-form-no-bg" placeholder="发布时间" data-am-datepicker="" readonly="">
                                <small>发布时间为必填</small>
                            </div>
                            <div class="am-u-sm-6"></div>
                        </div>

                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <button type="button" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection