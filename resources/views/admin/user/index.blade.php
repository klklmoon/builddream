@extends('admin.layouts.main')

@section('content')
<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Striped rows</h5>
        
    </div>


    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>uid</th>
                <th>用户名</th>
                <th>邮箱</th>
                <th>创建时间</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($userList as $key=>$row)
                <tr class="">
                    <td>{{$row['uid']}}</td>
                    <td>{{$row['name']}}</td>
                    <td>{{$row['email']}}</td>
                    <td>{{$row['created_at']}}</td>
                    <td>
                        <ul class="icons-list">
                            <li><a href="{{url('user/'.$row['uid'].'/edit')}}"><i class="icon-pencil7"></i></a></li>
                            <li><a href="#"><i class="icon-trash"></i></a></li>
                            <li><a href="#"><i class="icon-cog7"></i></a></li>
                        </ul>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="text-right">
        {{$userList->links()}}
    </div>
</div>


@endsection