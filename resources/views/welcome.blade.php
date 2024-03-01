@extends('layout')

@section('content')


    @foreach ($posts as $post)

        <article>
            <h1>{{$loop->iteration}}
                <a href="/posts/{{$post->slug}}"> {{$post->title}}</a>
            </h1>
            <P>
                BY <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in <a href="/category/{{$post->category->id}}">{{$post->category->name}}</a>
            </P>
            <div>
                {{$post->excerpt}}
            </div>
            <a href="/">go home </a>
        </article>

    @endforeach
@endsection
