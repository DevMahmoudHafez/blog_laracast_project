@auth()
    <form method="POST" action="/posts/{{$post->slug}}/comments" class="border border-gray-200 rounded-xl p-6">
        @csrf
        <header class="flex space-x-3 items-center">
            <img src="https://i.pravatar.cc/60?id={{auth()->id()}}" alt="" class="rounded-full" width="40" height="40">
            <h2>Want to particpate?</h2>

        </header>
        <div>
                        <textarea
                            name="body" id="body"
                            class="w-full text-s mt-4 border border-gray-300"
                            cols="30" rows="5"
                            placeholder="Quick, thing of something to say !!"></textarea>
            @error('body')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="pt-2 flex justify-end  ">
            <button type="submit" class="py-2 px-6 bg-blue-500 rounded-2xl uppercase text-s text-white">
                Post
            </button>
        </div>
    </form>
@else
    <a href="/login" class="m-6">log in to leave a comment</a>
@endauth
