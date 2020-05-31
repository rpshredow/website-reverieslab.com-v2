@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="/posts" class="btn btn-outline-secondary">Go Back</a>
            <hr>
            <h1>{{$post->title}}</h1>
            <hr>
            <p>{!!$post->body!!}</p>
            <hr>
            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
            <hr>
            @if(!Auth::guest())
                @if(Auth::user()->id == $post->user_id)
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-secondary">Edit</a>

                    <form action="{{ route('posts.destroy', $post->id)}}" method="post" class="float-right">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                @endif
            @endif
        </div>
    </div>
</div>
@endsection