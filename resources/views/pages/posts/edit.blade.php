@extends('Master.Main')
   
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>
                <div class="card-body">
                    <form method="post" action="{{ route('posts.update',$post->id) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="label">Post Title: </label>
                        <input type="text" name="title" value="{{$post->title}}" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label class="label">Post Body: </label>
                            <textarea name="body" rows="10" cols="30" class="form-control" required >{{$post->body}}</textarea>
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
