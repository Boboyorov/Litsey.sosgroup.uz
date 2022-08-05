<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Administrator;
use Illuminate\Http\Request;

class ChairsController extends Controller
{
    public function index()
    {
        return view('site.chairs', [
            'departments' => Department::orderBy('created_at', 'DESC')->paginate(123),
        ]);
    }

    public function show(Department $department){
        $administrators = Administrator::orderBy('created_at', 'DESC')->paginate(3);
        return view('site.foreign',compact(['department','administrators']));
    } 
}
