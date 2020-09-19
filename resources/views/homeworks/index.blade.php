@extends('Master.Admin')
@section('content')
<div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Student Details</h4>
                        <p>All about students like name, student id, phone, email, country, city and more</p>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>title</th>
                                        <th>email</th>
                                        <th>dadline</th>
                                        <th>view</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($homeworks as $homework)
                                        <tr>
                                        <td><span class="list-enq-name">{{$homework->title}}</span></td>
                                        <td><i class="far fa-envelope-open"></i> {{$homework->email}}</td>
                                        <td><i class="far fa-calendar-minus"></i> {{$homework->deadline}}</td>
                                        <td><a href="{{route('homeworks.show',$homework->id)}}" class="btn btn-success">view</a></td>
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
{{-- @foreach ($homeworks as $homework)
    {{$homework->title}}

    <br> 
    {{$homework->description}}<br>
    {{$homework->deadline}}<br>
    {{$homework->email}}<br>
     <a href="/homework/dawnload/{{$homework->file}}">dawnlad</a>
<iframe src="{{asset('homeworkFile/'.$homework->file)}}" style="width:600px; height:500px;" frameborder="0"></iframe>   
     @endforeach --}}