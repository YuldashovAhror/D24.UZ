<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use App\Models\OrganizationType;
use App\Models\Service;
use App\Models\Type;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class OrganizationController extends BaseController
{

    public function index()
    {
        $organizations = Organization::orderBy('id', 'desc')->with(['types', 'organizationtypes'])->get();
        return view('dashboard.organization.index', [
            'organizations' => $organizations
        ]);
    }

    public function create()
    {
        $organizationtypes = OrganizationType::orderBy('id', 'desc')->get();
        $types = Type::orderBy('id', 'desc')->get();
        $services = Service::orderBy('id', 'desc')->get();
        return view('dashboard.organization.create', [
            'organizationtypes' => $organizationtypes,
            'types' => $types,
            'services' => $services,
        ]);
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable',
                'phone' => 'required|string|max:255',
                'title' => 'required|string|max:255',
                'region_id' => 'required|integer',
                'district_id' => 'required|integer',
                'address' => 'required|string|max:255',
                'long_lat' => 'required|string|max:255',
                'type_id' => 'required|integer',
                'raiting' => 'required|integer',
                'status' => 'required|string|max:255',
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:20480',
                'gallery' => 'required|image|mimes:jpeg,png,jpg,gif|max:20480',
            ]);
            if (!empty($validatedData['photo'])) {
                $validatedData['photo'] = $this->photoSave($validatedData['photo'], 'image/organization');
            }
            if (!empty($validatedData['gallery'])) {
                $validatedData['gallery'] = $this->photoSave($validatedData['gallery'], 'image/organization/gallery');
            }
            $organization = Organization::create($validatedData);
            if (!empty($request->organizationtypes)) {
                $organization->organizationtypes()->attach($request->organizationtypes);
            }
            if (!empty($request->services)) {
                $organization->services()->attach($request->services);
            }
            return redirect()->route('dashboard.organization.store');
            } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public function edit($id)
    {
        $organization = Organization::find($id);
        $organizationtypes = OrganizationType::orderBy('id', 'desc')->get();
        $types = Type::orderBy('id', 'desc')->get();
        $services = Service::orderBy('id', 'desc')->get();
        $servicetype = array_column(
            \DB::table('organization_service')
                ->where('organization_id', $organization->id)
                ->select('service_id')
                ->get()
                ->toArray(),
            'service_id',
        );

        $organizationtype = array_column(
            \DB::table('organization_organization_type')
                ->where('organization_id', $organization->id)
                ->select('organization_type_id')
                ->get()
                ->toArray(),
            'organization_type_id',
        );

        return view('dashboard.organization.edit', [
            'organizationtypes' => $organizationtypes,
            'types' => $types,
            'services' => $services,
            'organization' => $organization,
            'servicetype' => $servicetype,
            'organizationtype' => $organizationtype,
        ]);
    }

    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable',
                'phone' => 'required|string|max:255',
                'title' => 'required|string|max:255',
                'region_id' => 'required|integer',
                'district_id' => 'required|integer',
                'address' => 'required|string|max:255',
                'long_lat' => 'required|string|max:255',
                'type_id' => 'required|integer',
                'raiting' => 'required|integer',
                'status' => 'required|string|max:255',
                'photo' => '|image|mimes:jpeg,png,jpg,gif|max:20480',
                'gallery' => '|image|mimes:jpeg,png,jpg,gif|max:20480',
            ]);

            if (!empty($validatedData['photo'])) {
                $this->fileDelete('\Organization', $id, 'photo');
                $validatedData['photo'] = $this->photoSave($validatedData['photo'], 'image/organization');
            }

            if (!empty($validatedData['gallery'])) {
                $this->fileDelete('\Organization', $id, 'gallery');
                $validatedData['gallery'] = $this->photoSave($validatedData['gallery'], 'image/organization/gallery');
            }
            $organization = Organization::findOrFail($id);
            $organization->update($validatedData);

            if (!empty($request->organizationtypes)) {
                $organization->organizationtypes()->sync($request->organizationtypes);
            }

            if (!empty($request->services)) {
                $organization->services()->sync($request->services);
            }
            // dd('asd');
            return redirect()->route('dashboard.organization.index');
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public function destroy($id)
    {
        try {
            $organization = Organization::findOrFail($id);
            $organization->organizationtypes()->detach();
            $organization->services()->detach();

            if (!empty($organization->photo)) {
                $this->fileDelete('\Organization', $id, 'photo');
            }
            if (!empty($organization->gallery)) {
                $this->fileDelete('\Organization', $id, 'gallery');
            }
            $organization->delete();

            return redirect()->route('dashboard.organization.index');
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }
}
