@extends('layouts.app')

@section('htmlheader_title')
    Users
@endsection

@section('contentheader_title')
    Manage Users
@endsection

@section('contentheader_description')

@endsection

@section('breadcrumbs')
    {!! Breadcrumbs::render('users') !!}
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-sm-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-users"></i> Users</h3>
                        @include('admin.users.components.create-user-modal')
                    </div>
                    <div class="box-body">
                        <table class="datatable table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Username/ Email</th>
                                <th>Role</th>
                                <th>Date Created</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td><a href="{{url('/admin/users/'.$user->id)}}" title="{{$user->name}}">{{$user->name}}</a></td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->role->role}}</td>
                                    <td>{{$user->created_at}}</td>
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