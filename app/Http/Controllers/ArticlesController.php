<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Article;
use App\Http\Requests\CreateArticleRequest;
use Illuminate\Http\Request;

/**
 * Class ArticlesController
 * @package App\Http\Controllers
 */
class ArticlesController extends Controller
{
    public function index() {

        $articles = Article::latest()->published()->get();

        return view('articles.index', compact('articles'));

    }

    public function show($id)
    {

        $article = Article::findOrFail($id);

        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(CreateArticleRequest $request)
    {

        Article::create(Request::all());

        return redirect('articles');
    }

}
