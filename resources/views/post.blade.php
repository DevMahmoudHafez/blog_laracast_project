<x-layout>
    <x-slot name="content">
        <h1>hi mahmoud</h1>
        <article>
            {!! $post->title !!}
            <P>
                <a href="/category/{{$post->category->id}}">{{$post->category->name}}</a>
            </P>
            {!! $post->body !!}
        </article>
        <a href="/">go home</a>
    </x-slot>
</x-layout>

