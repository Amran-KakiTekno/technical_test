<?php

namespace App\Http\Controllers;
use App\Models\person;
use Illuminate\Http\Request;

class form extends Controller
{
    public function createForm (Request $request) {
        return view('question1');
    }

    public function q1Form (Request $request) {
        $this->validate($request, [
            'first_name' => 'required',
            'sur_name' => 'required',
            'id_number' => 'required',
        ]);

        person::create($request->all());
        return back()->with('success', 'Record saved!');
    }
}
