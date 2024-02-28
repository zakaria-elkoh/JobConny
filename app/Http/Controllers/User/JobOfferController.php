<?php

namespace App\Http\Controllers\User;

use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;
use App\Models\JobOffer;
use App\Http\Controllers\Controller;
use App\Models\Sector;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobOfferController extends Controller
{
    use InteractsWithMedia;
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        $jobOffers = JobOffer::with('media')->get(); 
        return view('index', compact('jobOffers')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(jobOffer $jobOffer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(jobOffer $jobOffer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, jobOffer $jobOffer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(jobOffer $jobOffer)
    {
        //
    }
}
