@extends('Master.Admin')

@section('content')
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                    <div class="inn-title">
                        <h4>Add Topic</h4>
                        <p>Here you can edit your website basic details URL, Phone, Email, Address, User and password and more</p>
                    </div>
                    <div class="tab-inn">
                        <form method='post' action="{{ route('topics.store') }}">
                            @csrf
                        <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" value="" class="validate" required name="title">
                                    <label class="">topic name</label>
                                    <p class="help-block"></p>
                                    @if($errors->has('title'))
                                        <p class="help-block">
                                            {{ $errors->first('title') }}
                                        </p>    
                                        @endif      
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
    
    </div>
    </div>
    
@endsection


