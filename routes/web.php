<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

Route::get('/', [PostController::class,'index']);
Route::get('/posts/{post:slug}',[PostController::class,'show']);

Route::get('register',[RegisterController::class,'create'])->middleware('guest');
Route::post('register',[RegisterController::class,'store'])->middleware('guest');
Route::post('logout',[SessionsController::class,'destroy']);

//Route::get('/categories/{category:slug}',function (Category $category){
//    return view('posts',[
//        'posts'=> $category->posts,
//        'current_category'=>$category,
//        'categories'=>Category::all(),
//
//    ]);
//});

//Route::get('/authors/{author:username}',function (User $author){
//    return view('posts.index',[
//        'posts'=> $author->posts,
//    ]);
//});
