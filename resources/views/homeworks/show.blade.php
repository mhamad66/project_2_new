@extends('Master.Admin')
@section('content')
<div class="card text-center" style="width:50%;margin:auto">
    <div class="card-header">
    </div >
    <div class="card-body">
      <h5 class="card-title">title: {{$homework->title}}</h5>
      <p class="card-text">description: {{$homework->description}}</p>
      <p class="card-text"> <i class="far fa-calendar-minus"></i> dadline: {{$homework->deadline}}</p>
      <p class="card-text"> <i class="far fa-envelope-open"></i> Email: {{$homework->email}}</p>
      <a href="/homework/dawnload/{{$homework->file}}" class="btn btn-success"><i class="fas fa-download"></i> dawnload file homework</a>
    </div>
    <div class="card-footer text-muted">
        <div id="flipdown" class="flipdown"></div>

    </div>
  </div>
@endsection
@section('javascript')
<script>

var flipdown = new FlipDown(datetime);
flipdown.start();

</script>
@endsection