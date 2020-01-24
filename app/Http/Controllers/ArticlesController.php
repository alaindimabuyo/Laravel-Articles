<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Tag;
class ArticlesController extends Controller
{
    //

    public function index(){
        if(request('tag')){
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        }
        $articles = Article::latest()->get();
        return view('articles.index', ['articles'=> $articles]);
    }

    public function show(Article $article){
        return view('articles.show', ['article' => $article]);
    }

    public function create(){
      return view('create', [
          'tags' => Tag::all()
      ]);
    }

    public function store(){
        // dump(request()->all());
        // validation
        //  request()->validate([
        //      'title' => 'required',
        //      'excerpt' => 'required',
        //      'body' => 'required'
        //  ]);
        
        // $validatedArray = request()->validate([
        //     'title' => 'required',
        //     'excerpt' => 'required',
        //     'body' => 'required'
        // ]);
        //  Article::create($validatedArray);

        // return redirect('/about');
        $this->validatedArticle();
        $article = new Article(request(['title', 'excerpt', 'body']));
        $article->user_id = 1;
        $article->save();

        $article->tags()->attach(request('tags'));

        return redirect(route('articles.index'));

        
    }

    public function edit(Article $article){
        
        return view('edit', compact('article'));

        
    }

    public function update(Article $article){
        $article->update($this->validatedArticle());

        return redirect($article->path());
    }

    public function validatedArticle(){
        return request()->validate([
            'title' => 'required',
            'body' => 'required',
            'excerpt' => 'required',
            'tags' => 'exists:tags,id'
        ]);
    }
    public function delete(){
        
    }
}
