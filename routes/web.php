<?php

use App\Models\Post;
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

            //using model
    $posts=Post::all();

            //using array_map function..
//    $posts= array_map(function($file){
//        $content= YamlFrontMatter::parseFile($file);
//        return new Post(
//            $content->title,$content->slug,$content->excerpt,
//            $content->date,$content->body()
//        );
//    },$files);

                    //using for each
//    foreach ($files as $file){
//        $content= YamlFrontMatter::parseFile($file);
//        $posts[]=new Post(
//            $content->title,$content->slug,$content->excerpt,
//            $content->date,$content->body()
//        );
//    }
    return view('welcome',['posts'=>$posts]);

});
Route::get('/posts/{post}',function ($slug){

    $post= Post::class::find($slug);


    return view('post',[
        'post'=> $post,
    ]);
})->where('post','[A-z_\-]+');
