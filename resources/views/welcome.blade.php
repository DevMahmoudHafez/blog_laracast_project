@extends('layout')

@section('content')


    @foreach ($posts as $post)

        <article>
            <h1>{{$loop->iteration}}
                <a href="/posts/{{$post->slug}}"> {{$post->title}}</a>
            </h1>
            <div>
                {{$post->excerpt}}
            </div>
        </article>

    @endforeach
@endsection
