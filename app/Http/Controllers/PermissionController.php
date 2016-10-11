<?php

namespace App\Http\Controllers;

use App\Permission;
use Illuminate\Http\Request;

use App\Http\Requests;

class PermissionController extends Controller
{
    public function index()
    {
        return view('admin.permissions.index', [
            'permissions' => Permission::all()
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'permission' => 'required|unique:permissions',
        ]);
        $permission = Permission::create([
            'permission' => $request->permission,
        ]);

        $request->session()->flash('alert-success', $permission->permission . ' has been created.');

        return back();
    }

    public function show($id)
    {
        return view('admin.permissions.permission', [
            'permission' => Permission::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'permission' => 'required|unique:permissions',
        ]);

        $permission = Permission::findOrFail($id);

        $permission->permission = $request->permission;

        $permission->save();

        $request->session()->flash('alert-success', $permission->permission . ' has been updated.');

        return back();
    }

    public function destroy(Request $request, $id)
    {
        $permission = Permission::find($id);
        $permission->delete();
        $request->session()->flash('alert-success', $permission->permission . ' has been deleted.');
        return redirect('/admin/permissions');
    }
}
