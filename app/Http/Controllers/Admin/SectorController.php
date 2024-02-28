<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sector;
use App\Http\Requests\StoreSectorRequest;
use App\Http\Requests\UpdateSectorRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Gate::authorize('manage-sectors');
        $sectors=Sector::all();
        return view('admin.sector.index',compact('sectors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Gate::authorize('manage-sectors');
        return view('admin.sector.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSectorRequest $request)
    {
        // Gate::authorize('manage-sectors');
        $sector = Sector::create($request->all());
        $sector->save();
        return redirect('admin/sectors');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sector $sector)
    {
        // Gate::authorize('manage-sectors');
        $sector = Sector::all();
        return view('admin.sector.index',compact('sector'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sector $sector)
    {
        Gate::authorize('manage-sectors');
        return view('admin.sector.edit',compact('sector'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSectorRequest $request, Sector $sector)
    {
        Gate::authorize('manage-sectors');
        $sector->title=$request->title;
        $sector->save();
        return redirect('admin/sectors');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sector $sector)
    {
        Gate::authorize('manage-sectors');
        $sector->delete();
        return redirect('admin/sectors');
    }
}
