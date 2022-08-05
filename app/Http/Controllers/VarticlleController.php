<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Varticle;
use Illuminate\Http\Request;

class VarticlleController extends Controller
{
    public function list()
    {
        $varticles = Varticle::orderBy('created_at', 'DESC')->get();
        return view('site.varticles.list', compact('varticles'));
    }

    public function show($id)
    {
         $varticle = Varticle::find($id);
         return view('site.varticles.show', compact('varticle'));
    }
}
