@extends('layout')

@section('content')
    <Section class="px-6 py-8 max-w-l mx-auto">
        <h1 class="text-lg font-bold mb-6 ">Publish new Post</h1>
        <form method="POST" action="/admin/posts" class="border border-gray-200 max-w-sm mx-auto rounded-xl p-6" enctype="multipart/form-data">
            @csrf
            <x-form.input name="title" ></x-form.input>
            <x-form.input name="slug" ></x-form.input>
            <x-form.input name="thumbnail" type="file" ></x-form.input>
            <x-form.textarea name="excerpt"  ></x-form.textarea>
            <x-form.textarea name="body" type="file" ></x-form.textarea>

            <div class="mb-6 center">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="category_id">
                    category</label>

                <select name="category_id" id="category_id" class="rounded-2xl py-2 px-3">
                    @foreach(\App\Models\Category::all() as $category)
                        <option value="{{$category->id}}">{{ucwords($category->name)}}</option>
                    @endforeach
                </select>
                @error('category_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="pt-2 flex justify-end  ">
                <button type="submit" class="py-2 px-6 bg-blue-500 rounded-2xl uppercase text-s text-white">
                    Post
                </button>
            </div>
        </form>
    </Section>
@endsection
