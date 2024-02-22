<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfileRequest $request)
    {

        // dd(Auth::user());
        $user = Auth::user();

        $user->update([
            'field' => $request->field,
            'experience' => $request->experience,
            'adress' => $request->adress,
            'job_name' => $request->job_name,
            'description' => $request->description,
        ]);

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('user.profile.index', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $recruiter)
    {
        // return view('representative.recruiters.edit', compact('recruiter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $recruiter)
    {
        // $recruiter->update([
        //     'name' => $request->name,
        //     'email' => $request->email
        // ]);

        // return redirect()->route('rep.dash.recruiters.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $recruiter)
    {
        // $recruiter->delete();
        // return redirect()->route('rep.dash.recruiters.index');
    }

    public function trash()
    {

        // // trashed recruiters
        // $trashed_recruiters = User::onlyTrashed()
        // ->orderBy('deleted_at', 'desc')
        // ->get();

        // return view('rep.dash.recruiters.trash', compact('trashed_recruiters'));
    }
}
