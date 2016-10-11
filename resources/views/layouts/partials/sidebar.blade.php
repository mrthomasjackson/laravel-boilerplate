<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

    {{--<!-- Sidebar user panel (optional) -->--}}
    {{--@if (! Auth::guest())--}}
    {{--<div class="user-panel">--}}
    {{--<div class="pull-left image">--}}
    {{--<img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />--}}
    {{--</div>--}}
    {{--<div class="pull-left info">--}}
    {{--<p>{{ Auth::user()->name }}</p>--}}
    {{--<!-- Status -->--}}
    {{--<a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--@endif--}}

    {{--<!-- search form (Optional) -->--}}
    {{--<form action="#" method="get" class="sidebar-form">--}}
    {{--<div class="input-group">--}}
    {{--<input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>--}}
    {{--<span class="input-group-btn">--}}
    {{--<button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>--}}
    {{--</span>--}}
    {{--</div>--}}
    {{--</form>--}}
    <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="{{Request::is('home') ? 'active' : ''}}"><a href="{{ url('home') }}"><i class="fa fa-home"
                                                                                               aria-hidden="true"></i>
                    <span>Home</span></a></li>
            @role('Administrator')
            <li class="treeview {{Request::is('admin/*') ? 'active' : ''}}">
                <a href="{{url('admin')}}"><i class="fa fa-lock" aria-hidden="true"></i> <span>Admin</span> <i
                            class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    @permission('Manage Users')
                    <li class="{{Request::is('admin/users*') ? 'active' : ''}}"><a
                                href="{{url('/admin/users')}}">Users</a></li>
                    @endpermission
                    @permission('Manage Roles')
                    <li class="{{Request::is('admin/roles*') ? 'active' : ''}}"><a
                                href="{{url('/admin/roles')}}">Roles</a></li>
                    @endpermission
                    @permission('Manage Permissions')
                    <li class="{{Request::is('admin/permissions*') ? 'active' : ''}}"><a
                                href="{{url('/admin/permissions')}}">Permissions</a></li>
                    @endpermission
                </ul>
            </li>
            @endrole
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>