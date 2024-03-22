<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    public function index()
    {
        return view('admin.posts.index',[
            'posts'=>Post::latest()->get(),
        ]);
    }
    public function create()
    {


        return view('admin.posts.create');
    }

    public function store()
    {

        Post::create(array_merge($this->validatePost(),[
            'user_id'=>auth()->id(),
            'thumbnail'=>request()->file('thumbnail')->store('thumbnails'),
        ]));
        return redirect('/');
    }

    public function edit(Post $post)
    {
        //dd($post->title);
        return view('admin.posts.edit',['post'=>$post]);
    }

    public function update(Post $post)
    {
        $attributes=$this->validatePost($post);
        if(isset($attributes['thumbnail']))
        $attributes['thumbnail']= request()->file('thumbnail')->store('thumbnails');

        $post->update($attributes);
        return redirect('/admin/posts')->with('success','Post updated !');

    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/admin/posts');

    }

    protected function validatePost(?Post $post=null)
    {
        $post??=new Post();
        return request()->validate([
            'title'=>'required',
            'thumbnail'=> $post->exists ? ['image']:['required','image'],
            'slug'=>['required',Rule::unique('posts','slug')->ignore($post)],
            'excerpt'=>'required',
            'body'=>'required',
            'category_id' => [ 'required', Rule::exists('categories','id'),],
            'published_at'=>'required'

        ]);
    }
}
