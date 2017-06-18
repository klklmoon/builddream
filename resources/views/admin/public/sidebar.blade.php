
@section('sidebar')
<div class="sidebar-content">
    <!-- Main navigation -->
    <div class="sidebar-category sidebar-category-visible">
        <div class="category-content no-padding">
            <ul class="navigation navigation-main navigation-accordion">

                <!-- Main -->
                <li class="navigation-header"><span>菜单</span> <i class="icon-menu" title="菜单"></i></li>
                <li>
                    <a href="#"><i class="icon-users"></i> <span>用户管理</span></a>
                    <ul>
                        <li><a href="{{url('user')}}">用户列表</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navigation -->

</div>

@endsection