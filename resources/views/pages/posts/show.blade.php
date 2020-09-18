@extends('Master.Main')   
@section('content')
<div class="card" style="padding: 15px ;width:50%;margin:auto">
    @if(Str::length($post->image))
                                      <img src="{{asset('storage/'.$post->image)}}" alt="" width="100%">
                                      @endif
    <div class="card-body">
        @if (Auth::user()->id == $post->user_id )
    <a class="btn-primary btn" href="{{$post->id}}/edit"><i class="far fa-edit"></i> edit</a>
    <form method="POST" action="{{route('posts.destroy',$post->id)}}" style="display: inline-block;" >
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i> delete</button>
    </form>
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
@endsection