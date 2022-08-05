<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\Article;
use App\Models\Varticle;
use App\Models\Video;
use App\Models\Department;
use App\Models\Administrator;
use App\Models\Callback;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders_count = Slider::all()->count();
        $article_count = Article::all()->count();
        $varticle_count = Varticle::all()->count();
        $Video_count = Video::all()->count();
        $department_count = Department::all()->count();
        $administrator_count = Administrator::all()->count();
        $contact_count = Callback::all()->count();
        

        return view('admin.home.index', [
            'sliders_count' => $sliders_count,
            'article_count' => $article_count,
            'varticle_count' => $varticle_count,
            'video_count' => $Video_count,
            'department_count' => $department_count,
            'administrator_count' => $administrator_count,
            'contact_count' => $contact_count,
        ]);
    }
}
