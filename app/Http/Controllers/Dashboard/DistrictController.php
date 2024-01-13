<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Region;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function index()
    {
        $regions = Region::all();
        $districts = District::orderBy('id', 'desc')->with('regions')->get();
        return view('dashboard.district.index', [
            'regions'=>$regions,
            'districts'=>$districts,
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'region_id' => 'required|integer',
            'name' => 'required|string|max:255',
        ]);
        District::create($validatedData);
        return back();
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'region_id' => 'required|integer',
            'name' => 'required|string|max:255',
        ]);
        District::find($id)->update($validatedData);
        return back();
    }

    public function destroy($id)
    {
        District::find($id)->delete();
        return back();
    }
}
