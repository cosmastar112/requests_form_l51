<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateRequestRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RequestsController extends Controller
{
    public function index()
    {
        $requests = \App\Request::all();

        return view('admin.requests.index', compact('requests'));
    }

    public function create()
    {
        $request = new \App\Request();
        $personsIds = \App\Person::getList();

        return view('admin.requests.create', compact('request', 'personsIds'));
    }

    public function show(\App\Request $request)
    {
        return view('admin.requests.show', compact('request'));
    }

    public function edit(\App\Request $request)
    {
        $personsIds = \App\Person::getList();

        return view('admin.requests.edit', compact('request', 'personsIds'));
    }

    public function update(\App\Request $request, CreateRequestRequest $createRequestRequest)
    {
        $request->update($createRequestRequest->all());

        session()->flash('request_updated', 'Request successfully updated!');

        $redirectTo = route('admin.requests.show', [$request->id]);

        return redirect($redirectTo);
    }

    public function store(\App\Request $request, CreateRequestRequest $createRequestRequest)
    {
        $request = \App\Request::create($createRequestRequest->all());

        session()->flash('request_created', 'Request successfully created!');

        $redirectTo = route('admin.requests.show', [$request->id]);

        return redirect($redirectTo);
    }

    public function delete(\App\Request $request)
    {
        $request->delete();

        $redirectTo = route('admin.requests', [$request->id]);

        session()->flash('request_removed', 'Request successfully removed!');

        return redirect($redirectTo);
    }
}
