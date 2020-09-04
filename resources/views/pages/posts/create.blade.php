@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>
                <div class="card-body">
                    <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                        <div class="form-group">
                            @csrf
                            <label class="label">Post Title: </label>
                            <input type="text" name="title" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label class="label">Post Body: </label>
                            <textarea name="body" rows="10" cols="30" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="posts image">post image:</label>
                          <input type="file" class="form-control" name="image[]" id="image" accept="image/*" multiple>
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

@section('scripts')
<script>
// $(document).ready(function(){
// $('form').ajaxForm({
//     beforeSend:function(){
//         $('#success').empty();
//         $('.progress-bar').text('0%');
//         $('.progress-bar').css('width','0%');
//     },
//     uploadProgress:function(event,position,total,percentComplete){
//         $('.progress-bar').text(percentComplete + '0%');
//         $('.progress-bar').css('width', + percentComplete + '0%');

//     },
//     success:function(data){
// if(data.success){
//     $('#success').html('<div class=" text-success text-center"> <br>' + data.success + 
//     '</br></div><br/></br/>');

//     $('#success').oppend(data.image);
//     $('.progress-bar').text('uploaded');
//     $('.progress-bar').css('width','100%');

// }
//     }
// });    
// });
</script>
@endsection