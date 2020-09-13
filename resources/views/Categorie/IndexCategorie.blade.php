@extends('Master.Admin')
@section('title')
    IndexCategorie
@endsection
@section('content')
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Home Page Slider</h4>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Add By</th>
                                    <th>Date</th>
                                    <th>Delete</th>
                                    <th>Edite</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $categorie)
                                    <tr>
                                        <td>{{$categorie->id}}</td>
                                        <td>{{$categorie->name}}</td>
                                        <td>{{Auth::user()->name}}</td>
                                        <td>{{$categorie->created_at}}</td>

                                        <td><a href="{{route('DeleteCategorie',['id' => $categorie->id])}}"
                                               class="btn btn-danger">Delete</a></td>
                                        <td><a href="{{route('EditeCategorie',['id' => $categorie->id])}}"
                                               class="btn btn-primary">Edite</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection