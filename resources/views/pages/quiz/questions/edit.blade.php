@extends('Master.Admin')

@section('content')
    <h3 class="page-title">@lang('quickadmin.questions.title')</h3>
    
    <form  method="POST" action="{{route('questions.update',$question->id)}}">
        @method('PUT')
            @csrf
    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="" class="control-label">Topic</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="topic_id">
                        @foreach ($topics as $topic)
                        <option value="{{$topic->id}}">{{ $topic->title }}</option>
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
                  <label for="" class="control-label"> question_text</label>
                    <textarea name="question_text" id="" cols="30" rows="10" class="control-control">{{$question->question_text}}</textarea>
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
                    <label for="" class="control-label"> code_snippet</label>
                    <textarea name="code_snippet" id="" cols="30" rows="10" class="control-control">{{$question->code_snippet}}</textarea>
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
                    <label for="" class="control-label">answer_explanation</label>
                    <textarea name="answer_explanation" id="" cols="30" rows="10" class="control-control">{{$question->answer_explanation}}</textarea>
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
                    <label for=" " class="control-label" title="title"> more_info_link</label>
                    <input type="text" class="form-control" name="more_info_link" value="{{$question->more_info_link}}">
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
<button type="submit" class="btn btn-danger">update</button>    
</form>
@endsection

