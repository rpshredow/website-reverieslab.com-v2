@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Posts</h1>
            <hr>
            <ul>
                @foreach($posts as $post)
                    <div class="well">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                        <hr>
                    </div>
                @endforeach
                {{$posts->links()}}
            </ul>
        </div>
    </div>
</div>
@endsection