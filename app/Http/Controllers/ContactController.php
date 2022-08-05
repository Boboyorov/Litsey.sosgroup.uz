<?php

namespace App\Http\Controllers;

use App\Models\Callback;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('site.contact', [
            'callbacks' => Callback::orderBy('created_at', 'DESC')->get(),
        ]);
    }
}
