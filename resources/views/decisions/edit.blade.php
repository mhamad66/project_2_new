@extends('Master.Main')
@section('content')
<div class="container">
{{-- start create --}}
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>Create decisions</h4>
                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                </div>
                <div class="tab-inn">
                    <form method='post' action="{{ route('decisions.update',$decision->id) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <h4>Create</h4>
                        <div class="row ad-p-lr ad-mar-bot-20">
                            <div class="input-field col s12">
                            <input type="text" value="{{$decision->title}}" class="validate" name="title">
                                <label class="">title</label>
                            </div>
                            <div class="input-field col s12">
                                <textarea type="text" value="" class="validate" name="description">{{$decision->description}}</textarea>
                                <label class="">description</label>
                            </div>
                            <div class="file-field input-field col s12">
                                <div class="btn admin-upload-btn">
                                    <span>File</span>
                                    <input type="file" multiple="" name="image">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Slider image">
                                </div>
                            </div>
                        </div>
                          <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
{{-- end create --}}
@endsection