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
                                        <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                    </div>
                                    <div class="bor">
                                        <form>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input id="list-title" type="text" class="validate">
                                                    <label for="list-title" class="">Course Name</label>
                                                </div>
                                                <div class="input-field col s12">
                                                    <input id="list-title" type="text" class="validate">
                                                    <label for="list-title" class=""> Title Name</label>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <textarea class="materialize-textarea"></textarea>
                                                    <label>Course Descriptions:</label>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div  class="col-sm-6">
                                                    <input id="list-name" style="background-color: #002147" name="image" type="file" class="btn btn-primary">
                                                </div>

                                            </div>
                                            <div  class="col-sm-6 , form-group ">
                                                <label for="">Choise Year  Or public : </label>
                                                <select name="year" class="form-control" id="">
                                                    <option value="0">Public</option>
                                                    <option value="1">FIRST</option>
                                                    <option value="2">SECOND</option>
                                                    <option value="3">THIRD</option>
                                                    <option value="4">FOURTH</option>
                                                    <option value="5">FIFTH</option>
                                                </select>
                                            </div>

{{--                                            <div class="col-sm-6 , form-group ">--}}
{{--                                                <label for="">Choise Categorie: </label>--}}
{{--                                                <select name="categorie" class="form-control" id="">--}}
{{--                                                    <option value="0">!---</option>--}}

{{--                                                @foreach($categories as $cat)--}}
{{--                                                    <option value="{{$cat->id}}">{{@$cat->name}}</option>--}}
{{--                                                        @endforeach--}}
{{--                                                </select>--}}
{{--                                            </div>--}}


                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="submit" style="background-color: #002147" class="btn btn-primary"  value="Add Course">
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