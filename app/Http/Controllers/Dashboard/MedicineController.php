<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Medicine;
use App\Models\MedicineCategory;
use App\Models\MedicineType;
use App\Models\Representative;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class MedicineController extends BaseController
{
    public function index()
    {
        $medicines = Medicine::orderBy('id', 'desc')->get();
        return view('dashboard.medicine.index', [
            'medicines' => $medicines
        ]);
    }

    public function create()
    {
        $medicinecategories = MedicineCategory::orderBy('id', 'desc')->get();
        $representatives = Representative::orderBy('id', 'desc')->get();
        $medicinetypes = MedicineType::orderBy('id', 'desc')->get();
        return view('dashboard.medicine.create', [
            'medicinecategories' => $medicinecategories,
            'representatives' => $representatives,
            'medicinetypes' => $medicinetypes,
        ]);
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'medicinecategory_id' => 'required|integer',
                'representative_id' => 'required|integer',
                'name' => 'required|string|max:255',
                'description' => 'nullable',
                'country' => 'required|string|max:255',
                'manufacturer' => 'required|string|max:255',
                'code' => 'required|string|max:255',
                'number' => 'required|string|max:255',
                'status' => 'required|string|max:255',
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:20480',
            ]);
            if (!empty($validatedData['photo'])) {
                $validatedData['photo'] = $this->photoSave($validatedData['photo'], 'image/medicine');
            }
            $medicines = Medicine::create($validatedData);
            if (!empty($request->medicinetypes)) {
                $medicines->medicinetypes()->attach($request->medicinetypes);
            }
            return back();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }
    public function edit($id)
    {
        $medicine = Medicine::find($id);
        $medicinecategories = MedicineCategory::orderBy('id', 'desc')->get();
        $representatives = Representative::orderBy('id', 'desc')->get();
        $medicinetypes = MedicineType::orderBy('id', 'desc')->get();

        $medicinetype = array_column(
            \DB::table('medicine_medicine_type')
                ->where('medicine_id', $medicine->id)
                ->select('medicine_type_id')
                ->get()
                ->toArray(),
            'medicine_type_id',
        );

        return view('dashboard.medicine.edit', [
            'medicinecategories' => $medicinecategories,
            'representatives' => $representatives,
            'medicinetypes' => $medicinetypes,
            'medicine' => $medicine,
            'medicinetype' => $medicinetype,
        ]);
    }
    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'medicinecategory_id' => 'required|integer',
                'representative_id' => 'required|integer',
                'name' => 'required|string|max:255',
                'description' => 'nullable',
                'country' => 'required|string|max:255',
                'manufacturer' => 'required|string|max:255',
                'code' => 'required|string|max:255',
                'number' => 'required|string|max:255',
                'status' => 'required|string|max:255',
                'photo' => '|image|mimes:jpeg,png,jpg,gif|max:20480',
            ]);
            if (!empty($validatedData['photo'])) {
                $this->fileDelete('\Medicine', $id, 'photo');
                $validatedData['photo'] = $this->photoSave($validatedData['photo'], 'image/medicine');
            }
            $medicine = Medicine::findOrFail($id);
            $medicine->update($validatedData);

            if (!empty($request->medicinetypes)) {
                $medicine->medicinetypes()->sync($request->medicinetypes);
            }
            return back();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public function destroy($id)
    {
        try {
            $medicine = Medicine::findOrFail($id);
            $medicine->medicinetypes()->detach();
            if (!empty($medicine->photo)) {
                $this->fileDelete('\Medicine', $id, 'photo');
            }
            $medicine->delete();
            return back();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }
}
