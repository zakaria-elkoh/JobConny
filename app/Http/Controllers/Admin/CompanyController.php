<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Policies\CompanyPolicy; 
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        // $this->authorize('viewAny', Company::class); 

        $companies = Company::paginate(10); 

        return view('admin.companies.index', compact('companies'));
    }

    public function destroy(Company $company)
    {
        // $this->authorize('delete', $company);

        $company->delete();

        return redirect()->route('admin.companies.index')->with('success', 'Company deleted.');
    }
}