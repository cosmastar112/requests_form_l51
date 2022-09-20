<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PersonController extends Controller
{
    public function show($person)
    {
        $person = \App\Person::where('login', $person)->first();

        if (!$person) {
            abort(404);
        }

        $request = new \App\Request();
        $request->per_id = $person->id;

        $personsIds = \App\Person::getList($person);

        return view('person.show', compact('person', 'request', 'personsIds'));
    }
}
