<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{

    public function getdistrict(Request $request)
    {
        dd($request->all());
    }
    public function index()
    {
        $regions = Region::all();
        return view('dashboard.region.index', [
            'regions'=>$regions
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        Region::create($validatedData);
        return back();
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        Region::find($id)->update($validatedData);
        return back();
    }

    public function destroy($id)
    {
        Region::find($id)->delete();
        return back();
    }
}
