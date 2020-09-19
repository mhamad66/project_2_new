@extends('Master.Main')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card " style="padding: 15px">
                <div class="card-header">Create Post</div>
                <div class="card-body">
                    <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                        <div class="form-group">
                            @csrf
                            <label class="label" style="color: #444;font-size:15px;margin:10px">Post Title: </label>
                            <input type="text" name="title" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label class="label" style="color: #444;font-size:15px;margin:10px">Post Body: </label>
                            <textarea name="body" rows="10" cols="30" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="posts image">post image:</label>
                          <input type="file" class="form-control" name="image" id="image" accept="image/*" multiple>
                          </div>
                          
                        <div class="form-group mt-2">
                            <input type="submit" class="btn btn-success" name="upload" value="post" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
