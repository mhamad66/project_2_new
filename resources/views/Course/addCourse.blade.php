@extends('Master.Admin')
@section('content')
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp admin-form">
                    <div class="sb2-2-add-blog sb2-2-1">
                        <h2>Add New Course</h2>


                        <div class="tab-content">
                            <div id="home" class="tab-pane fade active in">
                                <div class="box-inn-sp">
                                    <div class="inn-title">
                                        <h4>Course Information</h4>
                                    </div>
                                    <div class="bor">
                                        <form action='' method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input id="list-title" name="name" type="text" class="validate">
                                                    <label for="list-title" class="">Course Name</label>
                                                </div>

                                                <div class="input-field col s12">
                                                    <input id="list-title" name="title" type="text" class="validate">
                                                    <label for="list-title" class=""> Title Name</label>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <textarea name="description"
                                                              class="materialize-textarea"></textarea>
                                                    <label>Course Descriptions:</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input id="list-name" style="background-color: #002147" name="image"
                                                           type="file" class="btn btn-primary">
                                                </div>

                                            </div>
                                            <div class="col-sm-6 , form-group ">
                                                <label for="">Choise Year Or public : </label>
                                                <select name="year" class="form-control" id="">
                                                    <option value="">Public</option>
                                                    <option value="FIRST">First</option>
                                                    <option value="SECOND">Second</option>
                                                    <option value="THIRD">Third</option>
                                                    <option value="FOURTH">Fourth</option>
                                                    <option value="FIFTH">Fivth</option>
                                                </select>
                                            </div>

                                            <div class="col-sm-6 , form-group ">
                                                <label for="">Choise Categorie: </label>
                                                <select name="categorie" class="form-control" id="">
                                                    <option value="0">!---</option>

                                                    @foreach($categories as $cat)
                                                        <option value="{{$cat->id}}">{{@$cat->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>


                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="submit" style="background-color: #002147"
                                                           class="btn btn-primary" value="Add Course">
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