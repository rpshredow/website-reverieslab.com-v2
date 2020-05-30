@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <hr>
                    <h3>Your Blog Posts</h3>
                    @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <td>Title</td>
                                <td></td>
                                <td></td>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary float-right">Edit</a></td>
                                    <td>
                                        <form action="{{ route('posts.destroy', $post->id)}}" method="post" class="float-right">
                                            @csrf
                                            @method('DELETE')
                                           <button class="btn btn-danger" type="submit">Delete</button>
                                       </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else 
                        <p>You have no posts</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
