<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalObject;

class PersonalObjectController extends Controller
{
    public function index()
    {
        $personalObjects = PersonalObject::all();
        return view('personal_object', compact('personalObjects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        PersonalObject::create([
            'name' => $request->name,
        ]);

        return redirect()->route('personal_objects.index')->with('success', 'Personal object created successfully');
    }
}
