<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\jobOffer;
use App\Http\Requests\StorejobOfferRequest;
use App\Http\Requests\UpdatejobOfferRequest;

class JobOfferController extends Controller
{
    public function index()
    {
        // Determine which jobs to fetch (e.g., offers created by the current user)
        $jobOffers = JobOffer::paginate(10);  
        return view('admin/joboffer/index', compact('jobOffers'));
    }

    public function destroy(JobOffer $jobOffer)
    {
        // Authorization: Verify that the user can delete this offer

        $jobOffer->delete();

        return redirect()->route('admin.joboffer.index')->with('success', 'Job offer deleted.');
    }
}
