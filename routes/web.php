<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'PagesController@home');     
// Route::get('/', function(App\Example $example){
//     // $container = new \App\Container();

//     // $container->bind('example', function(){
//     //     return new \App\Example();
//     // });

//     // $example = $container->resolve('example');
//     // $example->go();
//     // $example = resolve(App\Example::class);
//     ddd($example);
// });

Route::get('/about', function(){
    return view('about', [
        'articles' => App\Article::take(3)->latest()->get()
    ]);
});


Route::get('/articles', 'ArticlesController@index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show');

Route::get('/posts/{post}','PostsController@show');

Route::get('/articles/{article}/edit','ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update');




