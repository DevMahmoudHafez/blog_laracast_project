@extends('layout')

@section('content')
    <Section class="px-6 py-8 max-w-sm mx-auto">
        <h1 class="text-lg font-bold mb-6 ">Publish new Post</h1>
        <form method="POST" action="/admin/posts" class="border border-gray-200 max-w-sm mx-auto rounded-xl p-6" enctype="multipart/form-data">
            @csrf
            <div class="mb-6 center">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="title">
                    title</label>
                <input class="border border-gray-600 p-2 w-full rounded-xl"
                       type="text"
                       name="title"
                       id="title"
                       value="{{old('title')}}"

                       required>
                @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6 center">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="slug">
                    slug</label>
                <input class="border border-gray-600 p-2 w-full rounded-xl"
                       type="text"
                       name="slug"
                       id="slug"
                       value="{{old('slug')}}"

                       required>
                @error('slug')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6 center">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="excerpt">
                    excerpt</label>
                <textarea class="border border-gray-600 p-2 w-full rounded-xl"
                       type="text"
                       name="excerpt"
                       id="excerpt"
                       value="{{old('excerpt')}}"

                       required></textarea>
                @error('excerpt')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6 center">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="thumbnail">
                    thumbnail</label>
                <input class="border border-gray-600 p-2 w-full rounded-xl"
                          type="file"
                          name="thumbnail"
                          id="thumbnail"
                          value="{{old('thumbnail')}}"

                          required></input>
                @error('thumbnail')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6 center">
                <label class="block mb-2 uppercase  font-bold text-xs text-gray-700"
                       for="body">
                    body</label>
                <textarea class="border border-gray-600 rounded-xl p-2 w-full"
                       type="text"
                       name="body"
                       id="body"
                       value="{{old('body')}}"

                       required></textarea>
                @error('body')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
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
