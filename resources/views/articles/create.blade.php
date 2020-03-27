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
          @error('title')
          <p class=" help is-danger">{{$errors->first('title')}}</p>
          @enderror
        </div>

        <div class="field">
          <label class="label" for="body">Body</label>
        </div>
        <div class="control">
          <input type="text" class"input" name="body" id="body">
          @error('body')
          <p class=" help is-danger">{{$errors->first('body')}}</p>
          @enderror
        </div>


        <div class="field">
          <label class="label" for="excerpt">Excerpt</label>
        </div>
        <div class="control">
          <input type="text" class"input" name="excerpt" id="excerpt">
          @error('excerpt')
          <p class=" help is-danger">{{$errors->first('excerpt')}}</p>
          @enderror
        </div>

        <div class="field">
          <label class="label" for="tags">Tags</label>
        </div>
        <div class="control">
          <select name="tags[]" multiple>
            @foreach($tags as $tag)
            <option value="{{$tag->id}}">{{$tag->name}}</option>
            @endforeach
          </select>
          @error('tags')
            <p class="help is-danger"><{{$errors('tags')}}</p>
          @enderror
        </div>

        <div class="field is-grouped">
          <button class="button is-link" type="submit">Submit</button>
        </div>

    </form>
  </div>
</div>
@endsection
