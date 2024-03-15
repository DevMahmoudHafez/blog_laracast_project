@props(['comment'])

<article class="flex bg-gray-50 p-6 rounded-xl border border-gray-200 space-x-4">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/60?id={{$comment->author->id}}" alt="" class="rounded-xl" width="60" height="60">
    </div>
    <div>
        <header class="mb-4">
            <h3 class="font-bold">{{$comment->author->username}}</h3>
            <p class="text-xs">
                Posted <time>{{$comment->created_at->diffForHumans()}}</time>
            </p>
        </header>
        {{$comment->body}}
    </div>
</article>
