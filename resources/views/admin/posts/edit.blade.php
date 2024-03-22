@extends('layout')

@section('content')
    <Section class="px-6 py-8 max-w-sm mx-auto">
        <h1 class="text-lg font-bold mb-6 ">Edit Post</h1>
        <form method="POST" action="/admin/posts/{{$post->id}}" class="border border-gray-200 max-w-sm mx-auto rounded-xl p-6" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <x-form.input name="title" value="{{old('title',$post->title)}}"></x-form.input>
            <x-form.input name="slug" value="{{old('slug',$post->slug)}}"></x-form.input>
            <x-form.input name="thumbnail" type="file" value="{{old('thumbnail',$post->thumbnail)}}" ></x-form.input>
            <img
                @unless(isset($post->thumbnail))
                    src="/images/illustration-3.png"
                @else
                    src="{{asset('storage/'.$post->thumbnail)}}"
                @endunless
                alt="Blog Post illustration" class="rounded-xl" width="200" height="200">
            <x-form.textarea name="excerpt"  >{{old('excerpt',$post->excerpt)}}</x-form.textarea>
            <x-form.textarea name="body" type="file" >{{old('body',$post->body)}}</x-form.textarea>

            <div class="mb-6 center">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="category_id">
                    category</label>

                <select name="category_id" id="category_id" class="rounded-2xl py-2 px-3">
                    @foreach(\App\Models\Category::all() as $category)
                        <option
                            value="{{$category->id}}"
                        {{old('category_id',$post->category->id)==$category->id ? 'selected':''}}
                        >{{ucwords($category->name)}}</option>
                    @endforeach
                </select>
                @error('category_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="pt-2 flex justify-end  ">
                <button type="submit" class="py-2 px-6 bg-blue-500 rounded-2xl uppercase text-s text-white">
                    Update
                </button>
            </div>
        </form>
    </Section>
@endsection
