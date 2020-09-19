@extends('Master.Admin')
@section('content')
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp admin-form">
                    <div class="sb2-2-add-blog sb2-2-1">
                        <h2>Add New Event </h2>

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade active in">
                                <div class="box-inn-sp">
                                    <div class="inn-title">
                                        <h4>Event Information</h4>
                                    </div>
                                    <div class="bor">
                                        <form action='' method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}


                                            <div class="row">

                                                <div class="input-field col s12">
                                                    <input id="list-title" required="required" name="title" type="text"
                                                           class="validate">
                                                    <label for="list-title" class="">Title</label>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input id="list-title" required="required" name="description" type="text"
                                                           class="validate">
                                                    <label for="list-title" class="">Description</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input id="list-title" required="required" name="place" type="text"
                                                           class="validate">
                                                    <label for="list-title" class=""> Place</label>
                                                </div>

                                            </div>
                                            <div class="row">

                                                <div class="input-field col s12">
                                                    <input id="list-title" placeholder="##/##/####  &&:$$am/pm" required="required" name="date" type="text"
                                                           class="validate">
                                                    <label for="list-title" class=""> Date</label>
                                                </div>

                                            </div>


                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input id="list-name" style="background-color: #002147" name="image"
                                                           type="file" class="btn btn-primary">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="submit" style="background-color: #002147"
                                                           class="btn btn-primary" value="Add Event">
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