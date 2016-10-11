@if(isset($role))
    @if($role instanceof \App\Role)
        <!-- Modal -->
        <div class="modal fade" id="updateRoleModal" tabindex="-1" role="dialog" aria-labelledby="updateRoleModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    {!! Form::open(['url' => '/admin/roles/' . $role->id, 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="updateRoleModalLabel">Update Role</h4>
                    </div>
                    <div class="modal-body">
                        <div>
                            <div class="form-group">
                                {!! Form::label('role', 'Role', ['class' => 'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('role', $role->role, ['class' => 'form-control', 'required' => 'required']) !!}
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                data-target="#updateRoleModal">
            Update Role
        </button>
    @endif
@endif