<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Administrator;
use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    public function index() 
    {
        return view('site.administration',[
            'departments' => Department::orderBy('created_at', 'DESC')->get(),
            'administrators' => Administrator::orderBy('created_at', 'DESC')->get()
        ]);
    }
}
