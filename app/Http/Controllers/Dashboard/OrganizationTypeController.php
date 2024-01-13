<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\OrganizationType;
use Illuminate\Http\Request;

class OrganizationTypeController extends Controller
{
    
    public function index()
    {
        $organizationtypes = OrganizationType::all();
        return view('dashboard.organizationtype.index', [
            'organizationtypes'=>$organizationtypes
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        OrganizationType::create($validatedData);
        return back();
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        OrganizationType::find($id)->update($validatedData);
        return back();
    }

    public function destroy($id)
    {
        OrganizationType::find($id)->delete();
        return back();
    }
}
