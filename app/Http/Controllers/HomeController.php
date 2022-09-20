<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $persons = Person::all();

        return view('home.index', compact('persons'));
    }
}
