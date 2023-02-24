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
        $search = $_GET['animal'];
        $animals = Animal::query()->where('name', 'like', '%' . $search . '%')->orderBy('name')->get();
        return view('animals.index', compact('animals'));
    }
}
