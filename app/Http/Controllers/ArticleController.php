<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::orderByDesc('id')->get();

        $data = [
            'title'=>"Page articles -".config("app.name"),
            'description'=>"Listing des articles du blog",
            'articles'=>$articles,
        ];

        return view('article.index', $data);
        //return 'liste des articles';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'forumaire de creation';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //sauvegarde d'un nouvel article
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::where('id', $id)->first();


        $data = [
            'title'=>"Page articles -".config("app.name"),
            'description'=>"Affichage de votre article",
            'article'=>$article,
        ];

        return view('article.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
