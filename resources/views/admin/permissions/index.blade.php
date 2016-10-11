@extends('layouts.app')

@section('htmlheader_title')
    Permissions
@endsection

@section('contentheader_title')
    Manage Permissions
@endsection

@section('contentheader_description')

@endsection

@section('breadcrumbs')
    {!! Breadcrumbs::render('permissions') !!}
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-sm-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-user"></i> Permissions</h3>
                        @include('admin.permissions.components.create-permission-modal')
                    </div>
                    <div class="box-body">
                        <table class="datatable table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Permission</th>
                                <th>Created At</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($permissions as $permission)
                                <tr>
                                    <td><a href="{{url('/admin/permissions/'.$permission->id)}}" title="{{$permission->permission}}">{{$permission->permission}}</a></td>
                                    <td>{{$permission->created_at}}</td>
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