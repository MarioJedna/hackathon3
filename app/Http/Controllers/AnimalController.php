<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    //retrieving detail of one animal(dog)
    public function detail($id)
    {
        $beast = Animal::findOrFail($id);
        return view('animals.detail', compact('beast'));
    }

    //retrieving list of animals based on search
    public function results()
    {
        $search = $_GET['animal'] ?? null;
        $animals = Animal::query()->where('name', 'like', '%' . $search . '%')->orderBy('name')->limit(20)->get();
        return view('animals.index', compact('animals'));
    }

    // create new animal
    public function create()
    {
        $animal = new Animal;
        return view('animals.form', compact('animal'));
    }

    public function insert(Request $request)
    {

        $this->validate(
            $request,
            [
                'owner_id' => 'required|min:1|max:5',
                'name' => 'required|min:3|max:50',
                'species' => 'required|min:3|max:50',
                'breed' => 'required|min:3|max:50',
                'age' => 'required|min:0|max:50',
                'weight' => 'required|min:0|max:100',
            ],
            []
        );

        $animal = new Animal;
        // dd($request->post());
        $animal->image_id = 9999;
        $animal->owner_id = $request->post('owner_id');
        $animal->name = $request->post('name');
        $animal->species = $request->post('species');
        $animal->breed = $request->post('breed');
        $animal->age = $request->post('age');
        $animal->weight = $request->post('weight');
        $animal->save();

        session()->flash('success_message', 'The animal was registered');
        return redirect()->route('animals.detail', $animal->id);
    }

    public function edit($animalId)
    {
        $animal = Animal::findOrFail($animalId);
        return view('animals.form', compact('animal'));
    }

    public function update(Request $request, $animalId)
    {
        $animal = Animal::findOrFail($animalId);

        $this->validate(
            $request,
            [
                'owner_id' => 'required|min:1|max:5',
                'name' => 'required|min:3|max:50',
                'species' => 'required|min:3|max:50',
                'breed' => 'required|min:3|max:50',
                'age' => 'required|min:0|max:50',
                'weight' => 'required|min:0|max:100',
            ],
            []
        );

        $animal->owner_id = $request->post('owner_id');
        $animal->name = $request->post('name');
        $animal->species = $request->post('species');
        $animal->breed = $request->post('breed');
        $animal->age = $request->post('age');
        $animal->weight = $request->post('weight');
        $animal->save();


        session()->flash('success_message', 'The animal was upated');

        return redirect()->route('animals.edit', $animal->id);
    }

    public function delete($animalId)
    {
        $animal = Animal::findOrFail($animalId);
        $animal->delete();
        session()->flash('success_message', 'The animal was deleted');
        return redirect()->route('animals.create');
    }

}
