<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StorePersonRequest;
use App\Person;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PersonsController extends Controller
{
    public function index()
    {
        $persons = Person::all();

        return view('admin.persons.index', compact('persons'));
    }

    public function create()
    {
        $person = new Person();

        return view('admin.persons.create', compact('person'));
    }

    public function show(Person $person)
    {
        return view('admin.persons.show', compact('person'));
    }

    public function edit(Person $person)
    {
        return view('admin.persons.edit', compact('person'));
    }

    public function update(Person $person, StorePersonRequest $storePersonRequest)
    {
        $person->update($storePersonRequest->all());

        session()->flash('person_updated', 'Person successfully updated!');

        $redirectTo = route('admin.persons.show', [$person->id]);

        return redirect($redirectTo);
    }

    public function store(Person $person, StorePersonRequest $storePersonRequest)
    {
        $person = Person::create($storePersonRequest->all());

        session()->flash('person_created', 'Person successfully created!');

        $redirectTo = route('admin.persons.show', [$person->id]);

        return redirect($redirectTo);
    }

    public function delete(Person $person)
    {
        $person->delete();

        $redirectTo = route('admin.persons', [$person->id]);

        session()->flash('person_removed', 'Person successfully removed!');

        return redirect($redirectTo);
    }
}
