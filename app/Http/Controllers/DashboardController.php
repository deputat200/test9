<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function registers()
    {
        $data = User::all();

        return view('admin.registers')->with(['data'=>$data]);
    }

    public function delete($id)
    {
        $data = User::find($id);

        $data->delete();

        return redirect()->back();
    }
    
}
