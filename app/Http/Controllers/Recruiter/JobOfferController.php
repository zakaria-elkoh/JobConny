<?php

namespace App\Http\Controllers\Recruiter;

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
        $jobOffers = JobOffer::where('company_id', Auth::user()->company_id)->paginate(10);
        return view('recruiter.joboffers.index', compact('jobOffers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sectors = Sector::all();
        $company_id = Auth::user()->company_id;;
        return view('recruiter.joboffers.create', compact('sectors', 'company_id'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'contract_type' => 'required|string',
            'sector_id' => 'required',
            'company_id' => 'required',
            'experience_years' => 'required|integer',
            'city' => 'required|string',
            'salary' => 'required|numeric',
            'image' => 'nullable|image|max:2048'
        ]);


        $jobOffer = JobOffer::create($validatedData);

        // if ($request->hasFile('image')) {
        //     $jobOffer->addMediaFromRequest('image')
        //              ->toMediaCollection('job-offers'); 
        // }
        return redirect('recruiter/joboffers');
    }

    public function show(JobOffer $jobOffer)
    {
        //
    }

    public function edit($id)
    {
        $sectors = Sector::all();
        $jobOffer = JobOffer::findOrFail($id);
        return view('recruiter.joboffers.edit', compact('jobOffer', 'sectors'));
    }
    public function update(Request $request, JobOffer $jobOffer)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'contract_type' => 'required|string',
            'sector_id' => 'required|exists:sectors,id',
            'experience_years' => 'required|integer',
            'salary' => 'required|numeric',
            'city' => 'required|string',
            'image' => 'nullable|image|max:2048'
        ]);

        $jobOffer->update($validatedData);

        if ($request->hasFile('image')) {
            $jobOffer->addMediaFromRequest('image')
                ->toMediaCollection('job-offers');
        }

        return redirect()->route('recruiter.joboffers.index')->with('success', 'Job Offer updated!');
    }

    public function destroy(JobOffer $jobOffer)
    {
        //
    }
}
