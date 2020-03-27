@extends('layout')
@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            <div class="title">
                <h2>{{$article->title}}</h2>
                 </div>
                    <samp></samp>

            <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
            <p>{{$article->body}}</p>
            @foreach($article->tags as $tags)
            <a href="{{route('articles.index',['tag'=>$tags->name])}}">{{$tags ->name}}</a>
            @endforeach
        </div>

    </div>
</div>
@endsection
