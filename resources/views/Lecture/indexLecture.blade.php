@extends('Master.Main')
@section('content')
<div class="container">
        <div class="row">
        <div class="con-title">
            <h2>All  <span>lectures</span></h2>
        </div>



        @foreach($lectures as $lecture)

            @if(!is_null($lecture->file))
            <div class="col-sm-8" >
                <div class="home-top-cour">

                    <div class="home-top-cour-desc">
                            <h3>{{@$lecture->title}}</h3>

                        <h4>Belong to Course : {{$lecture->Course->name}}</h4>
                        <div class="hom-list-share">
                                <ul>
                                    <li><a class="label label-danger" href="{{route('DeleteLecture',['id'=>$lecture->id])}}">Delete</a></li>
                                    <li><a class="label label-default" href="{{route('EditeLecture',['id'=>$lecture->id])}}">Edite</a></li>
                                    <li><a class="label label-primary" href="/Lectures/Lecture_Course/{{$lecture->file}}">download</a></li>

                                </ul>
                            </div>
                    </div>
                </div>


            </div>
                @endif
        @endforeach


            @foreach($lectures as $lecture)

                @if(is_null($lecture->file))
                    <div class="col-sm-6" >
                        <div class="home-top-cour">

                            <div class="home-top-cour-desc">
                                <h3>{{$lecture->title}}</h3>

                                <h4>Belong to Course : {{$lecture->Course->name}}</h4>


                                <iframe width="420" height="315"
                                        src="https://www.youtube.com/embed/{{$lecture->link}}">
                                </iframe>

                                <div class="hom-list-share">
                                    <ul>
                                        <li><a class="btn btn-danger" href="{{route('DeleteLecture',['id'=>$lecture->id])}}">Delete</a></li>



                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                @endif
            @endforeach

    </div>
</div>
    @endsection