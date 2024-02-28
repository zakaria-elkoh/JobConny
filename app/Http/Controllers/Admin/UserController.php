<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $currentUserId = auth()->id();
        $users = User::where('id', '!=', $currentUserId)->get();
        return view('admin.user.index', compact('users'));
    }
    public function edit(User $user)
    {
        $roles = Role::all(); 
        return view('admin.user.edit', compact('user', 'roles')); 
    }

    public function update(Request $request, User $user)
    {

        // $this->authorize('updateRole', $user); 

        $request->validate([
            'role_id' => 'required|exists:roles,id'
        ]);

        $user->roles()->sync($request->role_id); 

        return redirect()->route('admin.users.index')->with('success', 'User role updated.');
    }
    public function destroy(User $user)
    {
        // $this->authorize('delete', $user); 
        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully.');
    }
}
