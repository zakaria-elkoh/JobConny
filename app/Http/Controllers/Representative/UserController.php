<?php

namespace App\Http\Controllers\Representative;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate as FacadesGate;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $this->authorize('isRepresentative');

        if (Auth::user()->company_id == null) {
            return redirect()->route('rep.dash.company.create');
        }

        $users = User::where('company_id', Auth::user()->company_id)->whereNotNull('company_id')->get();
        return view('representative.recruiters.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('isRepresentative');
        return view('representative.recruiters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'company_id' => Auth::user()->company_id,
            'password' => Hash::make($request->password),
        ]);

        $user->roles()->sync(3);

        return redirect()->route('rep.dash.recruiters.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $recruiter)
    {
        $this->authorize('isRepresentative');
        return view('representative.recruiters.edit', compact('recruiter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $recruiter)
    {
        $recruiter->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return redirect()->route('rep.dash.recruiters.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $recruiter)
    {
        $recruiter->delete();
        return redirect()->route('rep.dash.recruiters.index');
    }

    public function trash()
    {

        // trashed recruiters
        $trashed_recruiters = User::onlyTrashed()
            ->orderBy('deleted_at', 'desc')
            ->get();

        return view('rep.dash.recruiters.trash', compact('trashed_recruiters'));
    }
}
