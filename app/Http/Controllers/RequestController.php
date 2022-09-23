<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequestRequest;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class RequestController extends Controller
{
    public function index()
    {
        $request = new \App\Request();
        $personsIds = \App\Person::getList();

        return view('request.index', compact('request', 'personsIds'));
    }

    public function create(StoreRequestRequest $storeRequestRequest)
    {
        /** @var \App\Request $request Созданная заявка. */
        $request = \App\Request::create($storeRequestRequest->all());

        session()->flash('request_created', 'Request successfully created!');

        return redirect('/');
    }
}
