<?php

namespace App\Http\Controllers;
use App\Models\Video;
use Illuminate\Http\Request;

class About_inController extends Controller
{
    public function index()
    {
        return view('site.about_in', [
            'videos' => Video::orderBy('created_at', 'DESC')->take(1)->get(),
        ]);
    }
}
