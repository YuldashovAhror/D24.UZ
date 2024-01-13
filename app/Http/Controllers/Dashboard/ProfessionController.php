<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Profession;
use Illuminate\Http\Request;

class ProfessionController extends Controller
{
    public function index()
    {
        $professions = Profession::all();
        return view('dashboard.profession.index', [
            'professions'=>$professions
        ]); 
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        Profession::create($validatedData);
        return back();
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        Profession::find($id)->update($validatedData);
        return back();
    }

    public function destroy($id)
    {
        Profession::find($id)->delete();
        return back();
    }
}
