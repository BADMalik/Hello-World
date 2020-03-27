<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Tag;
class ArticleController extends Controller
{
    public function index()
    {
      if(request('tag'))
      {
        $articles = Tag::where('name',request('tag'))->firstorFail()->articles;
      }
      else {
        $articles = Article::take(5)->latest()->get();

      }
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
      $tags = Tag::all();
      return view('articles.create',['tags'=>$tags]);
    }
    public function store()
    {
      $validatedArticle=  Request()->validate
      ([
        'title'=>'required',
        'body'=>'required',
         'excerpt'=>'required'
        // 'tags'=>'exists:tags,id'
      ]);
      $article = new Article($validatedArticle);
      $article->user_id=1;
      $article->save();
      $article->tags()->attach(request('tags'));
      //Article::create($validatedArticle,['user_id'=>1]);
      // $article = new Article();
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
