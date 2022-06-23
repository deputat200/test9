<?php

namespace App\Http\Controllers;

use App\Models\Servicatigory;
use Illuminate\Http\Request;

class ServisController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function create()
    {
        return  view('admin.create');
    }

    public function sozdat(Request $request)
    {
        $catigory = new Servicatigory();
        $catigory->sername = $request->input('sername');
        $catigory->serdes = $request->input('serdes');
        $catigory->save();

        return redirect('/servis')->back();
    }


    
}
