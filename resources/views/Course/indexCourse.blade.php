@extends('Master.Main')
@section('content')
<div class="container">
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
                                    <th>Course Name</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Year</th>
                                    <th>Number of lectuere</th>
                                    <th>View More informtion</th>
                                    <th>Add lecture</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($courses as  $course)
                                    <tr>
                                        <td><img style="height: 30px; width: 30px"
                                                 src="/images/coursr_images/{{$course->image}}"></td>
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->title}}</td>
                                        <td>{{$course->Category->name}}</td>
                                        <td>
                                            @if(isset($course->year))
                                                {{$course->year}}
                                            @else
                                                PUBLIC
                                            @endif
                                        </td>
                                        <td>dd</td>
                                        <td><a href="{{route('InfoCourse',['id' => $course->id])}}"
                                               style="color: #ffffff" class="label label-info">viewMore</a></td>
                                        <td><a href="{{route('AddLectureId',['id' =>$course->id])}}"
                                               style="color: #ffffff" class="label label-primary">Add lecture</a></td>
                                        <td><a href="{{route('DeleteCourse',['id' => $course->id])}}"
                                               style="color: #ffffff" class="ad-st-view">Delete</a></td>
                                        <td><a href="{{route('EditeCourse',['id' => $course->id])}}"
                                               style="color: green" class="label label-success">Edite</a></td>

{{--                                        <td><a href="/images/coursr_images/{{$course->image}}">download</a></td>--}}

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
</div>
@endsection