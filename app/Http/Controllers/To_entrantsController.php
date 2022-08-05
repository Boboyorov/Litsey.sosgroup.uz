<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class To_entrantsController extends Controller
{
    public function index()
    {
        return view('site.to_entrants');
    }
}
