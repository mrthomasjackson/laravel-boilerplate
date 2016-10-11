<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisterController;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.index', [
            'users' => User::all()
        ]);
    }

    public function store(Request $request, RegisterController $registerController)
    {
        $registerController->register($request);
        return back();
    }

    public function show($id)
    {
        return view('admin.users.user',[
            'user' => User::find($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'role_id' => 'required|exists:roles,id',
            'name' => 'required|max:255',
        ]);

        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->name,
            'role_id' => $request->role_id
        ]);

        $request->session()->flash('alert-success', $user->name . ' has been updated.');

        return back();
    }

    public function destroy(Request $request, $id)
    {
        $user = User::find($id);
        $user->delete();
        $request->session()->flash('alert-success', $user->name . ' has been deleted.');
        return redirect('/admin/users/');
    }
}
