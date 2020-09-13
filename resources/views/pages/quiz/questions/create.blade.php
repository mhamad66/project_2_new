@extends('Master.Admin')
@section('content')
<form method="POST" action="{{route('questions.store')}}">
@csrf    
<div class="panel panel-default">
        <div class="panel-heading">
            create
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                  <label for="" class="control-label"> Topic</label>
                <select class="form-control" id="exampleFormControlSelect1" name="topic_id">
                    @foreach ($topics as $topic)
                    <option value="{{ $topic->id}}">{{ $topic->title }}</option>
                    @endforeach
                  
                </select>
                <p class="help-block"></p>
                    @if($errors->has('topic_id'))
                        <p class="help-block">
                            {{ $errors->first('topic_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {{-- {!! Form::label('question_text', 'Question text*', ['class' => 'control-label']) !!} --}}
                  <label for="" class="control-label"> question_text</label>
                   
                    {{-- {!! Form::textarea('question_text', old('question_text'), ['class' => 'form-control ', 'placeholder' => '']) !!} --}}
                    <textarea name="question_text" id="" cols="30" rows="10" class="control-control"></textarea>
                    <p class="help-block"></p>
                    @if($errors->has('question_text'))
                        <p class="help-block">
                            {{ $errors->first('question_text') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {{-- {!! Form::label('option1', 'Option #1', ['class' => 'control-label']) !!}
                    {!! Form::text('option1', old('option1'), ['class' => 'form-control ', 'placeholder' => '']) !!} --}}
                    <label for=" " class="control-label" title="title">option1</label>
                <input type="text" class="form-control" name="option1">
                    
                    <p class="help-block"></p>
                    @if($errors->has('option1'))
                        <p class="help-block">
                            {{ $errors->first('option1') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {{-- {!! Form::label('option2', 'Option #2', ['class' => 'control-label']) !!}
                    {!! Form::text('option2', old('option2'), ['class' => 'form-control ', 'placeholder' => '']) !!} --}}
                    <label for=" " class="control-label" title="title"> option2</label>
                <input type="text" class="form-control" name="option2">
                    
                    <p class="help-block"></p>
                    @if($errors->has('option2'))
                        <p class="help-block">
                            {{ $errors->first('option2') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {{-- {!! Form::label('option3', 'Option #3', ['class' => 'control-label']) !!}
                    {!! Form::text('option3', old('option3'), ['class' => 'form-control ', 'placeholder' => '']) !!} --}}
                    <label for=" " class="control-label" title="title">option3</label>
                <input type="text" class="form-control" name="option3">
                    
                    <p class="help-block"></p>
                    @if($errors->has('option3'))
                        <p class="help-block">
                            {{ $errors->first('option3') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {{-- {!! Form::label('option4', 'Option #4', ['class' => 'control-label']) !!}
                    {!! Form::text('option4', old('option4'), ['class' => 'form-control ', 'placeholder' => '']) !!} --}}
                    <label for=" " class="control-label" title="title"> option4</label>
                    <input type="text" class="form-control" name="option4">
                        
                    <p class="help-block"></p>
                    @if($errors->has('option4'))
                        <p class="help-block">
                            {{ $errors->first('option4') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {{-- {!! Form::label('option5', 'Option #5', ['class' => 'control-label']) !!}
                    {!! Form::text('option5', old('option5'), ['class' => 'form-control ', 'placeholder' => '']) !!} --}}
                    <label for=" " class="control-label" title="title"> option5</label>
                <input type="text" class="form-control" name="option5">
                    
                    <p class="help-block"></p>
                    @if($errors->has('option5'))
                        <p class="help-block">
                            {{ $errors->first('option5') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {{-- {!! Form::label('correct', 'Correct', ['class' => 'control-label']) !!}
                    {!! Form::select('correct', $correct_options, old('correct'), ['class' => 'form-control']) !!} --}}
                    <label for="" class="control-label">corect</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="correct">
                    <option value="1">option1</option>
                        <option value="2">option2</option>
                        <option value="3">option3</option>
                        <option value="4">option4</option>
                        <option value="5">option5</option>
                    </select>
                    <p class="help-block"></p>
                    @if($errors->has('correct'))
                        <p class="help-block">
                            {{ $errors->first('correct') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {{-- {!! Form::label('code_snippet', 'Code snippet', ['class' => 'control-label']) !!}
                    {!! Form::textarea('code_snippet', old('code_snippet'), ['class' => 'form-control ', 'placeholder' => '']) !!} --}}
                    <label for="" class="control-label"> code_snippet</label>
                    <textarea name="code_snippet" id="" cols="30" rows="10" class="control-control"></textarea>
                    <p class="help-block"></p>
                    @if($errors->has('code_snippet'))
                        <p class="help-block">
                            {{ $errors->first('code_snippet') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {{-- {!! Form::label('answer_explanation', 'Answer explanation*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('answer_explanation', old('answer_explanation'), ['class' => 'form-control ', 'placeholder' => '']) !!} --}}
                    <label for="" class="control-label"> answer_explanation</label>
                    <textarea name="answer_explanation" id="" cols="30" rows="10" class="control-control"></textarea>
                    <p class="help-block"></p>
                    @if($errors->has('answer_explanation'))
                        <p class="help-block">
                            {{ $errors->first('answer_explanation') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {{-- {!! Form::label('more_info_link', 'More info link', ['class' => 'control-label']) !!}
                    {!! Form::text('more_info_link', old('more_info_link'), ['class' => 'form-control', 'placeholder' => '']) !!} --}}
                    <label for=" " class="control-label" title="title"> more_info_link</label>
                <input type="text" class="form-control" name="more_info_link">

                    <p class="help-block"></p>
                    @if($errors->has('more_info_link'))
                        <p class="help-block">
                            {{ $errors->first('more_info_link') }}
                        </p>
                    @endif
                </div>
            </div>

        </div>
    </div>
    <button type='submit' class="btn btn-primary">save</button>
</from>
@endsection

