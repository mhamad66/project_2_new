@extends('Master.Admin')
@section('content')
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp admin-form">
                    <div class="sb2-2-add-blog sb2-2-1">
                        <h2>Edite Lecture</h2>

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade active in">
                                <div class="box-inn-sp">
                                    <div class="inn-title">
                                        <h4>Information Lecture</h4>
                                    </div>
                                    <div class="bor">
                                        <form action='' method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="row">

                                                <div class="input-field col s12" >
                                                    <input id="list-title" required="required" name="title" value="{{$lecture->title}}" type="text" class="validate">
                                                    <label for="list-title" class=""> Title Name</label>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="submit" style="background-color: #002147"
                                                           class="btn btn-primary" value="Save">
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
    </div>


@endsection