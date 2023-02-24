<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    
    public function detail($id)
    {
        $search = Owner::findorfail($id);
       

        return view('owner-detail.owner-details', compact('search'));

    }
    public function results()
    {
        
        $search = $_GET['owner']?? '';

        $result = Owner::query()->where('surname', 'like', '%' . $search . '%')->orderBy('surname')->limit(20)->get();

        return view('owner', compact('result'));

    }

    public function insert(Request $request)
    {
        $owner= new Owner();

        $owner->first_name = $request->post('name');
        $owner->surname = $request->post('surname');
        $owner->email = $request->post('email');
        $owner->phone = $request->post('phone');
        $owner->address = $request->post('address');

        $owner->save();

        session()->flash('success_message', 'The owner has been registered.');

        return route('owner-detail.owner-details', $owner->id);
    }
    
}
