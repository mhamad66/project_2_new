@extends('layouts.app')
   
@section('content')
<div class="container">



<div class="card" >
    <img class="card-img-top" src="{{asset('storage/'.$post->image)}}" alt="Card image cap">
    <div class="card-body">
        @if (Auth::user()->id == $post->user_id )
    <a class="btn-primary btn" href="{{$post->id}}/edit"> edit</a>
    <a class="btn-primary btn" href="{{$post->id}}"> delete</a>
    @endif
    <h2>{{$post->title}}</h2>
    <p class="card-text">{{$post->body}}</p>
    @include('pages.posts.commentsDisplay', ['comments' => $post->comments, 'post_id' => $post->id])
   
    <h4>Add comment</h4>
    <form method="post" action="{{ route('comments.store'   ) }}">
        @csrf
        <div class="form-group">
            <textarea class="form-control" name="body"></textarea>
            <input type="hidden" name="post_id" value="{{ $post->id }}" />
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Add Comment" />
        </div>
    </form>    
</div>
  </div>
</div>
@endsection