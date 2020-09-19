@extends('Master.Admin')
@section('content')
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Course Details</h4>
                        <p>All about courses, program structure, fees, best course lists (ranking), syllabus, teaching
                            techniques and other details.</p>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                <tr>

                                    <th>title</th>
                                    <th>course Name</th>
                                    <th>Year</th>
                                    <th>Semester</th>
                                    <th>Add at</th>
                                    <th>delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($marks as  $mark)
                                    <tr>

                                        <td>{{$mark->title}}</td>
                                        <td>{{$mark->Course->name}}</td>
                                        <td>{{$mark->Course->year}}</td>
                                        <td>{{$mark->semester}}</td>
                                        <td>{{$mark->created_at}}</td>
                                        <td><a href="{{route('DeleteMark',['id' =>$mark->id])}}"
                                               style="color: #ffffff" class="label label-primary">Delete</a></td>


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