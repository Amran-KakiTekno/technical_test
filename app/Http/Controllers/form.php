<?php

namespace App\Http\Controllers;
use App\Models\person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        DB::table('tbl_Person')->upsert(
            [
                ['col_firstname' => $request->first_name, 'col_surname' => $request->sur_name, 'col_idnumber' => $request->id_number],
            ],
            ['col_firstname', 'col_surname', 'col_idnumber'],
        );

        $response = [
            'first_name' => $request->first_name,
            'sur_name' => $request->sur_name,
            'id_number' => $request->id_number,
        ];
        return view('question1', compact('response'));
 
        person::create($request->all());
    }
}
