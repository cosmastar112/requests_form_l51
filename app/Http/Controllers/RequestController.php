<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequestRequest;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class RequestController extends Controller
{
    public function index()
    {
        $request = new \App\Request();

        return view('request.index', compact('request'));
    }

    public function create(CreateRequestRequest $createRequestRequest)
    {
        /** @var \App\Request $request Созданная заявка. */
        $request = \App\Request::create($createRequestRequest->all());

        session()->flash('request_created', 'Request successfully created!');

        return redirect('/');
    }
}
