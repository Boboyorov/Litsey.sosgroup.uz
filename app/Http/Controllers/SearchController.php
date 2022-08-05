<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search()
    {
        Article::query()
            ->where('title', 'LIKE', "%{$searchTerm}%") 
            ->orWhere('content', 'LIKE', "%{$searchTerm}%") 
            ->get();
    }
        
}
