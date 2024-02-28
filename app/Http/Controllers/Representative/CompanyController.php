<?php

namespace App\Http\Controllers\Representative;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Http\Requests\StorecompanyRequest;
use App\Http\Requests\UpdatecompanyRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\TryCatch;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('isRepresentativeWithCompany');
        $company = Company::findOrFail(Auth::user()->company_id);
        return view('representative.company.index', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('isRepresentativeWithoutCompany');
        return view('representative.company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecompanyRequest $request)
    {

        try {

            $company = Company::create([
                'name' => $request->name,
                'email' => $request->email,
                'adress' => $request->adress,
                'phone' => $request->phone,
                'description' => $request->description,
            ]);

            $user = Auth::user();

            $user->update([
                'company_id' => $company->id
            ]);

            return redirect()->route('rep.dash.company.index')->with('success', 'Company created with success');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Can not create the company at the moment');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return "hello from the show";
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Company $company)
    public function edit()
    {
        // $this->authorize('isRepresentativeWithCompany');
        $company = Company::findOrFail(Auth::company_id());
        // dd($company);
        return view('representative.company.create', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecompanyRequest $request, Company $company)
    {
        $company->update([
            'name' => $request->name,
            'email' => $request->email,
            'adress' => $request->adress,
            'phone' => $request->phone,
            'description' => $request->description,
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
