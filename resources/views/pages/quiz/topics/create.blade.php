@extends('layouts.app')

@section('content')
<div class="container">
<h3 class="page-title">title</h3>
    <form method='post' route = 'topics.store'>
      @csrf
        <div class="panel panel-default">
        <div class="panel-heading">
        create Topics
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for=" " class="control-label" title="title"> Title</label>
                    {{-- {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => '']) !!} --}}
                <input type="text" class="form-control">
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
<button type='submit' class="btn btn-primary">save</button>
</from>
</div>
@endsection

