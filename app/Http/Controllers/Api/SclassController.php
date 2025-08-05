<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sclass;
use Illuminate\Http\Request;

class SclassController extends Controller
{
    //
    public function index()
    {
        $class = Sclass::all();
        return response()->json($class);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'class_name'=>'required',
        ]);
        
        Sclass::insert([
            'class_name' => $request->class_name,
        ]);

        return response()->json([

            'message' => 'Class name added successfully',

        ]);
    }
}
