@extends('Master.Admin')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Manage Posts</h1>
            <a href="{{ route('posts.create') }}" class="btn btn-success" style="float: left">Create Post</a>
            {{-- <table class="table table-bordered">
                <thead>
                    <th width="80px">Id</th>
                    <th>Title</th>
                    <th width="150px">Action</th>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">View Post</a>
                    </td>
                </tr>
                </tbody>
   
            </table> --}}
        </div>
    </div>
    @foreach($posts as $post)
    <div class="card mb-3">
    <img src="{{asset('storage/'.$post->image)}}" class="card-img-top" alt="..." width="100%" height="100%" >
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
        <p class="card-text">{{$post->body}}</p>
          <p class="card-text"><small class="text-muted"><a href="{{route('posts.show',$post->id)}}" class="btn btn-primary"> more and comments</a> </small></p>
        </div>
      </div>
      @endforeach

</div>
@endsection