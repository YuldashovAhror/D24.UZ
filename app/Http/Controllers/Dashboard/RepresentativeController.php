<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Representative;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class RepresentativeController extends Controller
{
    public function index()
    {
        $representatives = Representative::orderBy('id', 'desc')->get();
        return view('dashboard.representative.index', [
            'representatives' => $representatives
        ]);
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'link' => '|string|max:255',
            ]);
            Representative::create($validatedData);
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
                'link' => '|string|max:255',
            ]);
            Representative::find($id)->update($validatedData);
            return back();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public function destroy($id)
    {
        Representative::find($id)->delete();
        return back();
    }
}
