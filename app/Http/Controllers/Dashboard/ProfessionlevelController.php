<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Professionlevel;
use Illuminate\Http\Request;

class ProfessionlevelController extends Controller
{
    public function index()
    {
        $professionlavels = Professionlevel::all();
        return view('dashboard.professionlavel.index', [
            'professionlavels'=>$professionlavels
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        Professionlevel::create($validatedData);
        return back();
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        Professionlevel::find($id)->update($validatedData);
        return back();
    }

    public function destroy($id)
    {
        Professionlevel::find($id)->delete();
        return back();
    }
}
