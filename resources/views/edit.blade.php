@extends('layout');

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1>New Article</h1>
        <form action="/articles/{{$article->id}}" method="POST">
            @method('PUT');
            @csrf
            <div class="field">
                <label for="title" class="label">Title</label>
                <div class="control">
                <input type="text" class="input" name="title" id="title" value="{{$article->title}}">
                </div>
            </div>

            <div class="field">
                <label for="excerpt" class="label">Excerpt</label>
                <div class="control">
                    <input type="text" class="input" name="excerpt" id="excerpt" value="{{$article->excerpt}}">
                </div>
            </div>
        
            <div class="field">
                <label for="body" class="label">Body</label>
                <div class="control">
                <input type="text" class="input" name="body" id="body" value="{{$article->body}}">
                </div>
            </div>

            <div class="control">
                <button class="button is-text" type="submit">Submit</button>
            </div>


        </form>
    </div>

</div>
@endsection