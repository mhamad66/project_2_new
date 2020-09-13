@extends('Master.Admin')
@section('title')
    AddCategorie
@endsection
@section('content')
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp admin-form">
                    <div class="sb2-2-add-blog sb2-2-1">
                        <h2>Edite Categorie</h2>

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade active in">
                                <div class="box-inn-sp">

                                    <div class="bor">


                                        <form action='' method="post" >
                                            {{csrf_field()}}

                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input id="list-title" name="name" value="{{$categorie->name}}" type="text" class="validate">
                                                    <label for="list-title" class="">Categorie Name</label>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <textarea  name="description"  class="materialize-textarea">{{$categorie->description}}</textarea>
                                                    <label>Categorie Descriptions:</label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <i class="waves-effect waves-light btn-large waves-input-wrapper"
                                                       style=""><input type="submit" class="waves-button-input"
                                                                       value="Submit"></i>
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
