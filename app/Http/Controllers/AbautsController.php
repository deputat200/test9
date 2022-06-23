<?php

namespace App\Http\Controllers;

use App\Models\Abauts;
use App\Models\User;
use Illuminate\Http\Request;

class AbautsController extends Controller
{
    public function index()
    {
        $abauts = Abauts::all();

        return view('admin.abauts')->with('abauts', $abauts);
    }

    public function status(Request $request)
    {

        $abauts = new Abauts;
        $abauts->title = $request->input('title');
        $abauts->subtitle = $request->input('subtitle');
        $abauts->descrip = $request->input('descrip');
        $abauts->save();
        return redirect('/abauts')->with('muvaffaqiyat', 'Biz haqimizda qoshilgan malumotlar');
    }


   

    public function abautdelete($id)
    {
        $abauts = Abauts::find($id);
        $abauts->delete();

        return redirect('abauts')->with('status delete');
    }

    public function edit($id)
    {
        $abaut = Abauts::find($id);
        
        return view('admin.editlar')->with('abaut', $abaut);
    }

    public function update(Request $request, $id)
    {
        $abaut = Abauts::find($id);

        
        $abaut->title = $request->input('title');
        $abaut->subtitle = $request->input('subtitle');
        $abaut->descrip = $request->input('descrip');
        $abaut->update();


        return redirect()->back()->with('status');
    }






    public function test()
    
    {
        
        $data = User::all();
        dd($data);
        return view('dashboard', compact('data'));
    }
}
