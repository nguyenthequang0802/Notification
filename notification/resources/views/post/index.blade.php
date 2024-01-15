@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>All Post</h1>
        @foreach($posts as $post)
            <div style="border-bottom: 1px dashed gray; margin-top: 10px">
                <h2>{{$post->name}}</h2>
                <p>{{$post->content}}</p>
                <a href="{{ route('post.show', $post->id) }}">
                    <button>Read more</button>
                </a>
            </div>
        @endforeach
    </div>
@endsection
