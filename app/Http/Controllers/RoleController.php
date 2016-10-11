<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

use App\Http\Requests;

class RoleController extends Controller
{
    public function index()
    {
        return view('admin.roles.index', [
            'roles' => Role::all()
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'role' => 'required|unique:roles',
        ]);
        $role = Role::create([
            'role' => $request->role,
        ]);

        $request->session()->flash('alert-success', $role->role . ' has been created.');

        return back();
    }

    public function show($id)
    {
        return view('admin.roles.role', [
            'role' => Role::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'role' => 'required|unique:roles',
        ]);

        $role = Role::findOrFail($id);

        $role->role = $request->role;

        $role->save();

        $request->session()->flash('alert-success', $role->role . ' has been updated.');

        return back();
    }

    public function destroy(Request $request, $id)
    {
        $role = Role::find($id);
        $role->delete();
        $request->session()->flash('alert-success', $role->role . ' has been deleted.');
        return redirect('/admin/roles');
    }
}
