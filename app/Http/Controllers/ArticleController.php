<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
      $articles = Article::take(5)->latest()->get();
      return view('articles.articles',['articles'=>$articles]);
    }
    //
    public function show(Article $articleid)
    {
        //$article = Article::find($id);
      //  dd($articleid);
        return view('articles.show',['article'=>$articleid]);
    }
    public function create()
    {
      return view('articles.create');
    }
    public function store()
    {
      $validatedArticle=  Request()->validate
      ([
        'title'=>'required',
        'body'=>'required',
        'excerpt'=>'required'
      ]);
      Article::create($validatedArticle);
      // $article = new Article();
      //
      // $article->body = request('body');
      // $article->title = request('title');
      // $article->excerpt = request('excerpt');
      // $article->save();
      return redirect('/articles');
    }
    public function edit(Article $articleid)
    {
      //$article = Article::find($articleid);
      //dd($articleid);
      return view('articles.edit',compact('articleid'));
    }
    public function update(Article $articleid)
    {
      ///$article = Article::find($articleid);
      $validatedArticle = Request()->validate(['title','body','excerpt']);
      // $articleid->title = request('title');
      // $articleid->body=request('body');
      // $articleid->excerpt = request('excerpt');
      // $articleid->save();
      $articleid->update($validatedArticle);
      return redirect('/articles/'.$articleid->id);
    }
}
