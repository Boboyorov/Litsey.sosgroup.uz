<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateArticle;
use App\Http\Requests\Admin\UpdateArticle;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateArticle  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateArticle $request)
    {
        $data = $request->all();
        $data['image'] = Article::uploadImage($request);
        $data['slug'] = Str::slug($request->title);

        if (Article::create($data)) {
            return redirect()->route('article.index')->with('message', 'Новость успешно добавлена!');
        }

        return redirect()->route('article.index')->with('message', 'Новость не успешно добавлена.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);

        return view('admin.articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateArticle  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticle $request, $id)
    {
        $article = Article::find($id);

        $data = $request->all();
        $data['image'] = Article::updateImage($request, $article);

        $data['slug'] = Str::slug($request->title);

        if ($article->update($data)) {
            return redirect()->route('article.index')->with('message', 'Новости успешно обновлено!');
        }

        return redirect()->route('article.index')->with('message', 'Новости не успешно обновлено');
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);

        if (File::exists(public_path() . $article->image)) {
            File::delete(public_path() . $article->image);
        }

        if ($article->delete()) {
            return redirect()->route('article.index')->with('message', "Новости удалены");
        }
        
        return redirect()->route('article.index')->with('message', "Не удалось удалить новости");

    }
}
