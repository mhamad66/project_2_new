@extends('Master.Admin')
@section('content')



    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp admin-form">
                    <div class="sb2-2-add-blog sb2-2-1">
                        <h2>Delete Course</h2>

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade active in">
                                <div class="bor">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <div>Are you sure Delete : {{$course->name}}</div>
                                        </div>
                                    </div>
                                    <form action='' method="post">
                                        {{csrf_field()}}
                                        <div>
                                            <input type="Submit" class="btn btn-danger" value="Delete">
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