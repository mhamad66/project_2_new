@extends('Master.Admin')
@section('content')
    <div class="">
        <div>
            <!--POPULAR COURSES-->
            <div class="home-top-cour">
                <!--POPULAR COURSES IMAGE-->
                <div class="col-md-3"> <img src="/images/coursr_images/{{$course->image}}" alt="sss"> </div>
                <div class="col-md-9 home-top-cour-desc">
                    <div class=""><span style="font-size: medium  ; color: black"> Name : </span> {{$course->name}}</div>

                    <div><span style="font-size: medium  ; color: black"> Title :</span> {{$course->title}}</div>
                    <div><span style="font-size: medium  ; color: black">Description :</span> {{$course->description}}</div>
                    <div class="row">
                        <ul>
                            <li class="btn btn-primary ">Add by : {{$course->User->name}}  </li>
                            <li class="btn btn-primary">Views : 333 </li>
                            <li class="btn btn-primary">Date :{{$course->created_at}} </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
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
                                <li><a class="btn btn-danger" href="{{route('DeleteLecture',['id'=>$lecture->id])}}">Delete</a></li>
                                <li><a class="btn btn-primary" href="/Lectures/Lecture_Course/{{$lecture->file}}">download</a></li>

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

@endsection