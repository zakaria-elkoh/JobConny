<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles=Role::all();
        return view('admin.role.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request)
    {
        $role=Role::create($request->all());
        $role->save();
        return redirect('admin/role');
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
        return view('admin.role.edit',compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        $role->title=$request->title;
        $role->save();
        return redirect('admin/role');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteRoleAndEditRole($roleId)
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
        return redirect('admin/role') ;
    }
}
