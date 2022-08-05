<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticlleController extends Controller
{
    public function list()
    {
        $articles = Article::orderBy('created_at', 'DESC')->paginate(9);
        return view('site.articles.list', compact('articles'));
    }

    public function show($id)
    {
         $article = Article::find($id);
         return view('site.articles.show', compact('article'));
    }
}
