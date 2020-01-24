@extends('layout');


@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>New Article</h1>
            <form action="/articles" method="POST">
                @csrf
                <div class="field">
                    <label for="title" class="label">Title</label>
                    <div class="control">

                    <input type="text" class="input @error('title') is-danger @enderror" name="title" id="title" value="{{old('title')}}">
                        @error('title')
                    <p class="help is-danger">{{$errors->first('title')}}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label for="excerpt" class="label">Excerpt</label>
                    <div class="control">
                        <input type="text" class="input" name="excerpt" id="excerpt">
                        @error('title')
                        <p class="help is-danger">{{$errors->first('title')}}</p>
                            @enderror
                    </div>
                </div>
            
                <div class="field">
                    <label for="body" class="label">Body</label>
                    <div class="control">
                        <input type="text" class="input" name="body" id="body">
                        @error('title')
                        <p class="help is-danger">{{$errors->first('title')}}</p>
                            @enderror
                    </div>
                </div>


                <div class="field">
                    <label for="body" class="label">Tags</label>

                    <div class="control">
                       <select name="tags[]" multiple id="">
                           @foreach ($tags as $tag)
                               <option value="{{$tag->id}}">{{$tag->name}}</option>
                           @endforeach
                       </select>
                    </div>
                </div>

                <div class="control">
                    <button class="button is-text" type="submit">Submit</button>
                </div>


            </form>
        </div>

    </div>
@endsection