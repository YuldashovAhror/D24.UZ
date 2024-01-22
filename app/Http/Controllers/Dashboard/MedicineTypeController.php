<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\MedicineType;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class MedicineTypeController extends Controller
{
    public function index()
    {
        $medicinetypes = MedicineType::orderBy('id', 'desc')->get();
        return view('dashboard.medicinetype.index', [
            'medicinetypes'=>$medicinetypes
        ]);
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
            ]);
            MedicineType::create($validatedData);
            return back();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
            ]);
            MedicineType::find($id)->update($validatedData);
            return back();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public function destroy($id)
    {
        MedicineType::find($id)->delete();
            return back();
    }
}
