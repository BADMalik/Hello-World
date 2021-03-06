@extends('layout')
@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
          <ul>
            @foreach($articles as $article)
            <li>
              <div class="title">
                <h2><a href="{{route('articles.show',$article)}}" >{{$article->title}}</a></h2>
              </div>
            </li>
            <li>
              <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
            </li>
            <li>
              <p>{{$article->body}}</p>
            </li>

              @foreach($article->tags as $tags )
            <li>
              <a href="{{route('articles.index',['tag'=>$tags->name])}}">{{$tags ->name}}</a>
            </li>
            @endforeach
            @endforeach
          </ul>
    </div>

    </div>
</div>
@endsection
