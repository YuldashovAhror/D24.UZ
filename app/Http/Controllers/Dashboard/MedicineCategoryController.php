<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\MedicineCategory;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;    

class MedicineCategoryController extends Controller
{

    public function index()
    {
        $medicinecategories = MedicineCategory::orderBy('id', 'desc')->get();
        return view('dashboard.medicinecategory.index', [
            'medicinecategories' => $medicinecategories
        ]);
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
            ]);
            MedicineCategory::create($validatedData);
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
            MedicineCategory::find($id)->update($validatedData);
            return back();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public function destroy($id)
    {
        MedicineCategory::find($id)->delete();
        return back();
    }
}
