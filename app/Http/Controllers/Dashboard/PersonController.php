<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use App\Models\Person;
use App\Models\Profession;
use App\Models\Professionlevel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PersonController extends BaseController
{

    public function index()
    {
        $persons = Person::orderBy('id', 'desc')->with('users')->get();
        return view('dashboard.person.index', [
            'persons' => $persons
        ]);
    }

    public function create()
    {
        $users = User::orderBy('id', 'desc')->get();
        $professions = Profession::orderBy('id', 'desc')->get();
        $professionlevels = Professionlevel::orderBy('id', 'desc')->get();
        $organizations = Organization::orderBy('id', 'desc')->get();
        return view('dashboard.person.create', [
            'users' => $users,
            'professions' => $professions,
            'professionlevels' => $professionlevels,
            'organizations' => $organizations,
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'experience' => 'nullable',
                'phone' => 'required|string|max:255',
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'bio' => 'required|string|max:255',
                'birthdate' => 'required|date',
                'staff' => 'required|string|max:255',
                'user_id' => 'required|integer',
                'profession_id' => 'required|integer',
                'sex' => 'required|string|max:255',
                'raiting' => 'required|integer',
                'status' => 'required|string|max:255',
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:20480',
            ]);
            if (!empty($validatedData['photo'])) {
                $validatedData['photo'] = $this->photoSave($validatedData['photo'], 'image/person');
            }
            $person = Person::create($validatedData);
            if (!empty($request->professionlevels)) {
                $person->professionlevels()->attach($request->professionlevels);
            }
            if (!empty($request->organizations)) {
                $person->organizations()->attach($request->organizations);
            }
            return redirect()->route('dashboard.person.store');
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public function edit($id)
    {
        $person = Person::find($id);
        $users = User::orderBy('id', 'desc')->get();
        $professions = Profession::orderBy('id', 'desc')->get();
        $professionlevels = Professionlevel::orderBy('id', 'desc')->get();
        $organizations = Organization::orderBy('id', 'desc')->get();
        $organizationtype = array_column(
            \DB::table('organization_person')
                ->where('person_id', $person->id)
                ->select('organization_id')
                ->get()
                ->toArray(),
            'organization_id',
        );
        $professionlevel = array_column(
            \DB::table('person_professionlevel')
                ->where('person_id', $person->id)
                ->select('professionlevel_id')
                ->get()
                ->toArray(),
            'professionlevel_id',
        );
        return view('dashboard.person.edit', [
            'organizationtype' => $organizationtype,
            'users' => $users,
            'professions' => $professions,
            'professionlevels' => $professionlevels,
            'organizations' => $organizations,
            'person' => $person,
            'professionlevel' => $professionlevel,
        ]);
    }

    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'experience' => 'nullable',
                'phone' => 'required|string|max:255',
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'bio' => 'required|string|max:255',
                'birthdate' => 'required|date',
                'staff' => 'required|string|max:255',
                'user_id' => 'required|integer',
                'profession_id' => 'required|integer',
                'sex' => 'required|string|max:255',
                'raiting' => 'required|integer',
                'status' => 'required|string|max:255',
                'photo' => '|image|mimes:jpeg,png,jpg,gif|max:20480',
            ]);
            if (!empty($validatedData['photo'])) {
                $this->fileDelete('\Person', $id, 'photo');
                $validatedData['photo'] = $this->photoSave($validatedData['photo'], 'image/person');
            }
            $person = Person::findOrFail($id);
            $person->update($validatedData);
            if (!empty($request->professionlevels)) {
                $person->professionlevels()->sync($request->professionlevels);
            }
            if (!empty($request->organizations)) {
                $person->organizations()->sync($request->organizations);
            }
            return redirect()->route('dashboard.person.store');
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public function destroy($id)
    {
        try {
            $person = Person::findOrFail($id);
            $person->organizations()->detach();
            $person->professionlevels()->detach();

            if (
                !empty($person->photo)
            ) {
                $this->fileDelete('\Person', $id, 'photo');
            }
            $person->delete();

            return redirect()->route('dashboard.person.index'); 
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }
}
