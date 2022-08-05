<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use App\Models\Article;
use App\Models\Varticle;
use App\Models\Video;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
    
        return view('site.index', [
            'sliders' =>  Slider::orderBy('created_at', 'DESC')->get(),
            'articles' => Article::orderBy('created_at', 'DESC')->take(3)->get(),
            'varticles' => Varticle::orderBy('created_at', 'DESC')->take(3)->get(),
            'videos' => Video::orderBy('created_at', 'DESC')->take(1)->get(),
        ]);
    }
}
