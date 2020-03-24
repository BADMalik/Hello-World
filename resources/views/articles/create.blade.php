@extends('layout')
@section('head')
@endsection
@section('content')
<div id="wrapper">
  <div id="page" class="container">
  <h1>Header </h1>
    <form method="POST" action="/articles">
      @csrf
        <div class="field">

          <label class="label" for="title">Title</label>
        </div>
        <div class="control">
          <input type="text" class"input" name="title" id="title">
        </div>

        <div class="field">
          <label class="label" for="body">Body</label>
        </div>
        <div class="control">
          <input type="text" class"input" name="body" id="body">
        </div>

        <div class="field">
          <label class="label" for="excerpt">Excerpt</label>
        </div>
        <div class="control">
          <input type="text" class"input" name="excerpt" id="excerpt">
        </div>

        <div class="field is-grouped">
          <button class="button is-link" type="submit">Submit</button>
        </div>

    </form>
  </div>
</div>
@endsection
