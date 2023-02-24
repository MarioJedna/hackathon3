<?php

namespace App\Http\Controllers;

use App\Models\Owners;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    
    public function detail($id,)
    {
        $search = Owners::findorfail($id);

        return view('owner.detail', compact($search));

    }
    public function results()
    {
        $search = $_GET['owner'];
        $result = Owners::query()->where('surname', 'like', '%' . $search . '%')->orderBy('surname')->get();

        return view('owner', compact('result'));

    }
    
   
}
