@extends('Master.Admin')
@section('content')
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp admin-form">
                    <div class="sb2-2-add-blog sb2-2-1">
                        <h2>Add New Lecture To Course</h2>

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade active in">
                                <div class="box-inn-sp">
                                    <div class="inn-title">
                                        <h4>Lecture Information</h4>
                                    </div>
                                    <div class="bor">
                                        <form action='' method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}

                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input id="list-title" required="required" name="title" type="text"
                                                           class="validate">
                                                    <label for="list-title" class=""> Title</label>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input id="list-name" style="background-color: #002147" name="link"
                                                           type="file" class="btn btn-success">
                                                </div>
                                            </div>

                                            <div class="col-sm-6 , form-group ">
                                                <label for="">Choise Course : </label>
                                                <select name="courseId" class="form-control" id="" required="required">
                                                    <option></option>
                                                    @foreach($courses as $course)
                                                        <option value="{{$course->id}}">{{@$course->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-sm-6 , form-group ">
                                                <label for="">Choise Semester : </label>
                                                <select name="semester" class="form-control" id="" required="required">
                                                        <option value="first">First Semester</option>
                                                        <option value="second">Second Semester</option>
                                                        <option value="third">Third Semester</option>

                                                </select>
                                            </div>


                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="submit" style="background-color: #002147"
                                                           class="btn btn-primary" value="Add Mark">
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