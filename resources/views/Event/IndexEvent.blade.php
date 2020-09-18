@extends('Master.Admin')
@section('content')
    <section>
        <div class="container-fluid com-sp">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>College <span> Events</span></h2>
                        </div>
                        <div>
                            <div class="ho-event pg-eve-main">
                                <ul>
                                    @foreach($events as $event)
                                    <li>
                                        <img src="/Event/Event/{{$event->image}}" class="ho-ev-date pg-eve-date"><span>{{$event->place}} at {{$event->Date}}</span>
                                        </img>
                                        <div class="ho-ev-link pg-eve-desc">
                                            <a href="event-register.html">
                                                <h4>{{$event->title}}</h4>
                                            </a>
                                            <p>{{$event->description}}</p>
                                            <span>{{$event->place}} at </span>
                                            <span>{{$event->Date}}</span>
                                        </div>
                                        <div class="pg-eve-reg">
                                            <a href="{{route('DeleteEvent',['id' =>$event->id])}}">Delete</a>
                                        </div>
                                    </li>
                                        @endforeach

                                </ul>
                            </div>
                        </div>

                        <div class="pg-pagina">
                            <ul class="pagination">
                                <li class="disabled"><a href="#!"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                                <li class="active"><a href="#!">1</a></li>
                                <li class="waves-effect"><a href="#!">2</a></li>
                                <li class="waves-effect"><a href="#!">3</a></li>
                                <li class="waves-effect"><a href="#!">4</a></li>
                                <li class="waves-effect"><a href="#!">5</a></li>
                                <li class="waves-effect"><a href="#!"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>@endsection