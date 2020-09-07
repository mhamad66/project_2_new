@extends('Master.Admin')

@section('content')

@if ($user = auth::user())
@endif
@if ($user->hasRole('waiting'))

@else
<div class="contianer">
  <div class="row">
      @foreach ($posts as $post)
      <div class="col-lg-3">
          <div class="card" style="width:18rem;">
              <img src="{{asset('storage/'.$post->image)}}" class="card-img-top" alt="..." width="100%" height="100%">
              <div class="card-body">
              <h5 class="card-title">{{$post->title}}</h5>
              <p class="card-text">{{$post->body}}</p>
              <a href="{{route('posts.show',$post->id)}}" class="btn btn-primary">Go To post</a>
              </div>
            </div>
   
          </div>
          @endforeach
  
      </div>
  
  </div>
  
@endif

@endsection
