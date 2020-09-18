@extends('Master.Main')
@section('content')
<div class="container">
<form action="{{route('goTest')}}" method="POST" style="width:50%; margin:auto; height:500px;padding-top:150px">
    @csrf
<select class="" id="exampleFormControlSelect1" name="topic_id">
    @foreach ($topics as $topic)
    <option value="{{$topic->id}}">{{$topic->title}}</option>
    @endforeach
  
</select>
<button type='submit' class="btn btn-primary"><i class="fas fa-check fa-2x"></i> Go To Test</button>
</form>
</div>
@endsection