@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="page-title">title</h3>
    
<form  method="POST" action="{{route('topics.update',$topic->id)}}">
@method('PUT')
    @csrf
    <div class="panel panel-default">
        <div class="panel-heading">
edit
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="" class="control-label"> title</label>
                <input type="text"  value="{{ $topic->title }}" class="form-control" name="title">
                    <p class="help-block"></p>
                    @if($errors->has('title'))
                        <p class="help-block">
                            {{ $errors->first('title') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>
    <button type="submit" class="btn btn-danger">update</button>
</form>

</div>
@endsection