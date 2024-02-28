<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles=Role::all();
        return view('admin.roles.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request)
    {
        $role=Role::create($request->all());
        $role->save();
        return redirect('admin/roles');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        return view('admin.roles.edit',compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        $role->title=$request->title;
        $role->save();
        return redirect('admin/roles');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($roleId)
    {
        DB::transaction(function () use ($roleId) {
            $role = Role::findOrFail($roleId);
            
            $users = $role->users;

            // Delete all users
            foreach ($users as $user) {
                $user->delete(); // Or $user->forceDelete() if you need to bypass soft delete
            }

            // Now delete the role
            $role->delete(); // Or $role->forceDelete() if needed
        });

        return redirect('admin/roles');
    }
}