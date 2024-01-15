@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Notifications</h1>
        @foreach($notifications as $notification)
            <div style="margin-top: 10px; border-bottom: 1px dashed gray">
                <p style="color: red; margin-bottom: 2px">{{ $notification->data['viewer_id']." seen ". $notification->data['post_name'] }}</p>
                <small>{{  $notification->created_at->diffForHumans() }}</small>
            </div>
        @endforeach
    </div>
@endsection
