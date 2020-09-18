<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="shortcut icon" href="{{asset('images/fav.ico')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700"
          rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/materialize.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style-mob.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/myStyle.css') }}" type="text/css">
    <link rel="stylesheet" href="css/flipdown/flipdown.css" />
    <script src="js/flipdown/flipdown.js"></script>


    <title>@yield('title')</title>

</head>

<body>
    @if ($user = auth::user())

    <!--== MAIN CONTRAINER ==-->
<div class="container-fluid sb1">
    <div class="row">
        <!--== LOGO ==-->
        <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
            <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
            <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
            <a href="index-2.html" class="logo"><img src="images/logo1.png" alt=""/>
            </a>
        </div>
        <!--== SEARCH ==-->
        <div class="col-md-6 col-sm-6 ">
            {{-- <k/form> --}}
        </div>
        <!--== NOTIFICATION ==-->
        <div class="col-md-2 tab-hide">
           
            <div class="top-not-cen">
                {{-- <a class='waves-effect btn-noti' href="admin-all-enquiry.html" title="all enquiry messages"><i
                            class="fa fa-commenting-o" aria-hidden="true"></i><span>5</span></a>
                <a class='waves-effect btn-noti' href="admin-course-enquiry.html" title="course booking messages"><i
                            class="fa fa-envelope-o" aria-hidden="true"></i><span>5</span></a>
                <a class='waves-effect btn-noti' href="admin-admission-enquiry.html" title="admission enquiry"><i
                            class="fa fa-tag" aria-hidden="true"></i><span>5</span></a> --}}
            </div>
        </div>
        <!--== MY ACCCOUNT ==-->
        <div class="col-md-2 col-sm-3 col-xs-6">
            <!-- Dropdown Trigger -->
            <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img
                        src="images/user/6.png" alt=""/>My Account <i class="fa fa-angle-down" aria-hidden="true"></i>
            </a>

            <!-- Dropdown Structure -->
            <ul id='top-menu' class='dropdown-content top-menu-sty'>
                <li>
                    @if ($user->hasRole('super_admin'))
                    <a class="waves-effect" href="{{route('users.index')}}"><i class="fa fa-cogs"
                        aria-hidden="true"></i>users</a>
                    @endif
                </li>
                <li class="divider"></li>
                <li>
                    <a class="ho-dr-con-last waves-effect" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                   <i class="fa fa-sign-in" aria-hidden="true"></i> logout
                 </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                 </form>
                </li>
            </ul>
         </div>
    </div>
</div>

<!--== BODY CONTNAINER ==-->
@if ($user->hasRole('waiting'))
<div class="container">
<form  action="{{route('profile.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
     <h2 class='p-2' >profile</h2>
     <div class="form-row">
       <div class="form-group col-md-6">
         <label for="name">phone_number</label>
       <input type="text" class="form-control" name="phone_number">
       </div>
       <div class="form-group col-md-6">
         <label for="facebook">facebook</label>
       <input type="text" class="form-control" name="facebook">
       </div>
     </div>
     <div class="form-group">
       <label for="address">address</label><br>
     <textarea name="address" id="" cols="100" rows="4"></textarea>
     </div>
     <div class="form-group">
       <label for="image">image_user</label>
        <br>
     <img src="{{$user->getAvatar()}}" alt="" class="mb-2" style="width: 100px">
     <input type="file" class="form-control" name="image_user">
     
   </div>
   <div class="form-group">
    <label for="image_identification_paper">image_identification_paper</label>
     <br>
     <img src="{{$user->getAvatar()}}" alt="" class="mb-2" style="width: 100px">
  
     <input type="file" class="form-control" name="image_identification_paper" placeholder="image_user">
  
</div>
     <button type="submit" class="btn btn-success">save profile</button>
   </form>
</div>
@else
<div class="container-fluid sb2">
    <div class="row">
        <div class="sb2-1">
            <!--== USER INFO ==-->
            <div class="sb2-12">
                <ul>
                    <li><img src="images/placeholder.jpg" alt="">
                    </li>
                    <li>
                        <h5>Victoria Baker <span> Santa Ana, CA</span></h5>
                    </li>
                    <li></li>
                </ul>
            </div>
            <!--== LEFT MENU ==-->
            <div class="sb2-13">
                <ul class="collapsible " data-collapsible="accordion">
                    <li><a href="/home" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i>
                            Dashboard</a>
                    </li>
                    <li><a href="/posts"><i class="fa fa-cogs" aria-hidden="true"></i> posts</a>
                    </li>
                    {{--------------------------------------- quiz--------------------------}}
                    <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                                                                                 aria-hidden="true"></i>
                                            quiz </a>
                                                <div class="collapsible-body left-sub-menu">
                                                    <ul>
                                                    <li><a href="/HomeQuiz">quiz </a>
                                                    </li>
                                                    <li><a href="{{ route('topics.index') }}"> topic</a>
                                                    </li>
                                                    <li><a href="{{ route('questions.index') }}">question</a>
                                                    </li>
                                                    <li><a href="{{ route('questions_options.index') }}"> question_option</a>
                                                    </li>
                                                    <li><a href="{{route('AddLecture')}}">result</a>
                                                    </li>
                                                    </ul>
                                                    </div>
                                                    </li>
{{---------------------------------------  End quiz  ---------------------}}

                    {{-------------------------------Categorie --------------------------------------}}
                    <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                                                                   aria-hidden="true"></i>
                            Categorie</a>
                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li><a href="{{route('IndexCategorie')}}">All Categorie</a>
                                </li>
                                <li><a href="{{route('AddCategorie')}}">Add New Categorie</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    {{-------------------------------End Categorie -----------------------------------}}



                    {{--------------------------------------- Courses--------------------------}}
                    <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                                                                   aria-hidden="true"></i>
                            Courses</a>
                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li><a href="{{route('IndexCourse')}}">All Course</a>
                                </li>
                                <li><a href="{{route('AddCourse')}}">Add New Course</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    {{---------------------------------------  End Courses  ---------------------}}
                    {{--------------------------------------- Lecture--------------------------}}
                    <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                                                                   aria-hidden="true"></i>
                            Lecture </a>
                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li><a href="{{route('IndexLecure')}}">All Lecture</a>
                                </li>
                                <li><a href="{{route('AddLecture')}}">Add Lecture</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    {{---------------------------------------  End Lecture  ---------------------}}
{{--------------------------------------- decisions--------------------------}}
<li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
    aria-hidden="true"></i>
    decisions </a>
<div class="collapsible-body left-sub-menu">
<ul>
<li><a href="{{ route('decisions.index') }}">decisions </a>
</li>
<li><a href="{{ route('decisions.create') }}">add decisions</a>
</li>
</ul>
</div>
</li>
{{---------------------------------------  End decisions  ---------------------}}
{{--------------------------------------- start homework--------------------------}}
<li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
    aria-hidden="true"></i>
    homeworks </a>
<div class="collapsible-body left-sub-menu">
<ul>
<li><a href="{{ route('homeworks.index') }}">homeworks</a>
</li>
<li><a href="{{ route('homeworks.create') }}">add homeworks</a>
</li>
</ul>
</div>
</li>
{{---------------------------------------  End homeworks  ---------------------}}

                    <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                                                                   aria-hidden="true"></i>
                            Mark</a>
                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li><a href="{{route('IndexMark')}}">All Mark</a>
                                </li>

                                <li><a href="{{route('AddMark')}}">Add New Mark</a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                                                                   aria-hidden="true"></i>
                            Event</a>
                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li><a href="{{route('IndexEvent')}}">All Event</a>
                                </li>
                                <li><a href="{{route('AddEvent')}}">Add New Event</a>
                                </li>

                            </ul>
                        </div>
                    </li>




                    <li><a href="{{route('profile.edit',Auth::user()->id)}}">
                        <i class="fa fa-image" aria-hidden="true"></i> profile</a>
                    </li>
                </ul>
            </div>
        </div>

<<<<<<< HEAD
{{--  --}}
  <!--== BODY INNER CONTAINER ==-->
  <div class="sb2-2">
    <!--== DASHBOARD INFO ==-->
    
    
    <!--== User Details ==-->
   @yield('content')
{{-- ======= --}}
    {{--  --}}
    <!--== BODY INNER CONTAINER ==-->
        <div class="sb2-2">
            <!--== breadcrumbs ==-->
            <div class="sb2-2-2">
                {{-- <ul>
                    <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>
                    <li class="active-bre"><a href="#"> Dashboard</a>

                </ul> --}}
            </div>
            <!--== DASHBOARD INFO ==-->


            <!--== User Details ==-->
            {{-- @yield('content') --}}

        </div>


    </div>

</div>
@endif
</div>

{{--  --}}

</div>
</div>
@endif
@yield('javascript')
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/main.min.js') }}"></script>
<script src="{{ asset('js/materialize.min.js') }}"></script>
<script src="{{ asset('js/myJs.js') }}"></script>

</body>

</html>
