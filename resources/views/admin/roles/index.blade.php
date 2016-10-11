@extends('layouts.app')

@section('htmlheader_title')
    Roles
@endsection

@section('contentheader_title')
    Manage Roles
@endsection

@section('contentheader_description')

@endsection

@section('breadcrumbs')
    {!! Breadcrumbs::render('roles') !!}
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-sm-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-user"></i> Roles</h3>
                       @include('admin.roles.components.create-role-modal')
                    </div>
                    <div class="box-body">
                        <table class="datatable table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Role</th>
                                <th>Created At</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td><a href="{{url('/admin/roles/'.$role->id)}}" title="{{$role->role}}">{{$role->role}}</a></td>
                                    <td>{{$role->created_at}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-scripts')
    <script>
        //Page Scripts Here
    </script>
@endsection