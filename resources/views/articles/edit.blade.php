@extends('layout')
@section('head')
@endsection
@section('content')
<div id="wrapper">
  <div id="page" class="container">
  <h1>Update Article {{$articleid->id}} </h1>
    <form method="POST" action="/articles/{{$articleid->id}}">
      @csrf
      @method('PUT')
        <div class="field">

          <label class="label" for="title">Title</label>
        </div>
        <div class="control">
          <input type="text" class"input" name="title" id="title" value="{{$articleid->title}}">
        </div>

        <div class="field">
          <label class="label" for="body">Body</label>
        </div>
        <div class="control">
          <input type="text" class"input" name="body" id="body" value="{{$articleid->body}}">
        </div>

        <div class="field">
          <label class="label" for="excerpt">Excerpt</label>
        </div>
        <div class="control">
          <input type="text" class"input" name="excerpt" id="excerpt" value="{{$articleid->excerpt}}">
        </div>

        <div class="field is-grouped">
          <button class="button is-link" type="submit">Submit</button>
        </div>

    </form>
  </div>
</div>
@endsection
