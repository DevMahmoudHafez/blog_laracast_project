<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;


class Post
{
    public $title;
    public $excerpt;
    public $date;
    public $body;
    public $slug;


    public function __construct($title,$slug, $excerpt, $date, $body)
    {
        $this->title = $title;
        $this->slug=$slug;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
    }


    public static function all()
    {
        $posts = cache()->rememberForever('posts.all',function(){
           return collect(File::files(resource_path("posts")))

                ->map(function($file){
                    return YamlFrontMatter::parseFile($file);
                })
                ->map(function($content){
                    return new Post(
                        $content->title,
                        $content->slug,
                        $content->excerpt,
                        $content->date,
                        $content->body()
                    );
                })->sortBy('date');
        });

        return $posts;


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
    }
    public static function find($slug){

                //here we will get the post with the slug content in the file

        $post=static::all()->firstWhere('slug',$slug);

        if(!$post){
            throw new ModelNotFoundException();
        }
        return $post;
                //here we find post with the file name
//    $path=resource_path("posts/{$slug}.html");
//    if(!file_exists($path)){
//        throw new ModelNotFoundException();
//        // return redirect('/');
//        // abort(404);
//        // ddd('file not exists');
//    }
//    $post=cache()->remember("posts.{slug}",5,function () use ($path){
//        var_dump($path);
//        return file_get_contents($path);
//    }) ;
//    return $post;
   }

}
