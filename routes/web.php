<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

//    DB::listen(function($query){
//        logger($query->sql,$query->bindings);
//    });

    $posts=Post::with('category')->get();
    //dd($posts);
    return view('welcome',['posts'=>$posts]);
});
Route::get('/posts/{post:slug}',function (Post $post){

    //$post= Post::class::find($id);
    return view('post',[
        'post'=> $post,
    ]);
});

Route::get('/category/{category}',function (Category $category){

    //$post= Post::class::find($id);
    $posts=$category->posts;
    return view('welcome',[
        'posts'=> $posts
    ]);
});
