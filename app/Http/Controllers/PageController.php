<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fleet;

class PageController extends Controller
{
    public function index()
    {
        $fleets = Fleet::all();

        return view('index', compact('fleets'));
    }

    public function fleets()
    {
        $fleets = Fleet::all();

        return view('our-cars', compact('fleets'));
    }
}
