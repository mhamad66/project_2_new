@extends('Master.Main')
@section('content')

<section>
    <div class="container com-sp">
        <div class="row">
            <a href="{{ route('posts.create') }}" class="btn btn-success" style="float: left"><i class="fas fa-plus"></i> Create Post</a>
            <div class="cor about-sp">
                <div class="ed-about-tit">
                    <div class="con-title">
                        <h2>Blog <span> Posts</span></h2>
                        <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                    </div>
                    <div>
                        <div class="ho-event pg-eve-main pg-blog">
                            <ul>
            @foreach($posts as $post)
                              
                                <li>
                                <div class="ho-ev-date pg-eve-date"><span></span><span> <i class="far fa-clock fa-2x"></i><br>{{$post->created_at}}</span>
                                    </div>
                                    <div class="pg-eve-desc pg-blog-desc">
                                        <a href="event-register.html">
                                            <h4>{{ $post->title }}</h4>
                                        </a>
                                      @if(Str::length($post->image))
                                      <img src="{{asset('storage/'.$post->image)}}" alt="" width="100px" height="500px">
                                      @endif
                                        <p>{{$post->body}}</p>
                                    </  div>
                                    <div class="pg-eve-reg pg-blog-reg">
                                        <a href="{{route('posts.show',$post->id)}}"><i class="far fa-comment"></i> more and comments</a>
                                    </div>
                                </li>
                                @endforeach 
                                
                            </ul>
                        </div>
                    </div>
                    <div class="pg-pagina">
                        <ul class="pagination">
                            <li class="disabled"><a href="#!"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                            <li class="active"><a href="#!">1</a></li>
                            <li class="waves-effect"><a href="#!">2</a></li>
                            <li class="waves-effect"><a href="#!">3</a></li>
                            <li class="waves-effect"><a href="#!">4</a></li>
                            <li class="waves-effect"><a href="#!">5</a></li>
                            <li class="waves-effect"><a href="#!"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--SECTION END-->

@endsection

{{-- <div class="row justify-content-center">
    <div class="col-md-12">
        <h1>Manage Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-success" style="float: left">Create Post</a>
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
  @endforeach --}}