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
        $search = $_GET['owner'];
        $result = Owner::query()->where('surname', 'like', '%' . $search . '%')->orderBy('surname')->get();

        return view('owner', compact('result'));

    }
    
}
