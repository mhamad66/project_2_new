@extends('Master.Main')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>decision</h1>
        </div>
    </div>
    <div class="card mb-3">
    <img src="{{asset('storage/'.$decision->image)}}" class="card-img-top" alt="..." width="100%" height="100%" >
        <div class="card-body">
          <h5 class="card-title">{{ $decision->title }}</h5>
        <p class="card-text">{{$decision->description}}</p>
          
      </div>
      </div>
    </div>
@endsection