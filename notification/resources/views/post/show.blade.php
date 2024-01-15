@extends('layouts.app')
@section('content')
    <h1>Post Detail</h1>
    <div class="container">
        <h1>{{ $post->name }}</h1>
        <p>{{ $post->content }}</p>
    </div>
@endsection
