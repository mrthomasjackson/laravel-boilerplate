@extends('layouts.app')

@section('htmlheader_title')
    Role
@endsection

@section('contentheader_title')
    Role {{$role->role}}
@endsection

@section('breadcrumbs')
    {!! Breadcrumbs::render('role', $role) !!}
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">

                        <h3 class="profile-username text-center">{{$role->role}}</h3>

                        <hr>
                        @include('admin.roles.components.update-role-modal')

                        <hr>
                        {!! Form::open(['url' => '/admin/roles/' .$role->id, 'method' => 'DELETE']) !!}
                        {!! Form::submit('Delete Role', ['class' => 'btn btn-danger btn-block']) !!}
                        {!! Form::close() !!}
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- About Me Box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">More Information</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a aria-expanded="true" href="#access" data-toggle="tab">Access</a></li>
                        <li class=""><a aria-expanded="false" href="#settings" data-toggle="tab">Settings</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="access">
                            <h4>Something will go here</h4>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="settings">
                            <h4>Something could go here. Such as the ability to edit the role.</h4>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
    </div>
@endsection