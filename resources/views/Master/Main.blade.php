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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/materialize.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style-mob.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/myStyle.css') }}" type="text/css">


    <title>@yield('title')</title>

</head>

<body>


{{--------------------------Start Header------------------------------}}
<!-- MOBILE MENU -->
<section>
    <div class="ed-mob-menu">
        <div class="ed-mob-menu-con">
            <div class="ed-mm-left">
                <div class="wed-logo">
                    <a href="index-2.html"><img src="images/logo.png" alt="" />
                    </a>
                </div>
            </div>
            <div class="ed-mm-right">
                <div class="ed-mm-menu">
                    <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                    <div class="ed-mm-inn">
                        <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                        <h4>All Courses</h4>
                        <ul>
                            <li><a href="course-details.html">Accounting/Finance</a></li>
                            <li><a href="course-details.html">civil engineering</a></li>
                            <li><a href="course-details.html">Art/Design</a></li>
                            <li><a href="course-details.html">Marine Engineering</a></li>
                            <li><a href="course-details.html">Business Management</a></li>
                            <li><a href="course-details.html">Journalism/Writing</a></li>
                            <li><a href="course-details.html">Physical Education</a></li>
                            <li><a href="course-details.html">Political Science</a></li>
                            <li><a href="course-details.html">Sciences</a></li>
                            <li><a href="course-details.html">Statistics</a></li>
                            <li><a href="course-details.html">Web Design/Development</a></li>
                            <li><a href="course-details.html">SEO</a></li>
                            <li><a href="course-details.html">Google Business</a></li>
                            <li><a href="course-details.html">Graphics Design</a></li>
                            <li><a href="course-details.html">Networking Courses</a></li>
                            <li><a href="course-details.html">Information technology</a></li>
                        </ul>
                        <h4>User Account</h4>
                        <ul>
                            <li><a href="#!" data-toggle="modal" data-target="#modal1">Sign In</a></li>
                            <li><a href="#!" data-toggle="modal" data-target="#modal2">Register</a></li>
                        </ul>
                        <h4>All Pages</h4>
                        <ul>
                            <li><a href="index-2.html">Home</a></li>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="admission.html">Admission</a></li>
                            <li><a href="all-courses.html">All courses</a></li>
                            <li><a href="course-details.html">Course details</a></li>
                            <li><a href="awards.html">Awards</a></li>
                            <li><a href="seminar.html">Seminar</a></li>
                            <li><a href="events.html">Events</a></li>
                            <li><a href="event-details.html">Event details</a></li>
                            <li><a href="event-register.html">Event register</a></li>
                            <li><a href="contact-us.html">Contact us</a></li>
                        </ul>
                        <h4>User Profile</h4>
                        <ul>
                            <li><a href="dashboard.html">User profile</a></li>
                            <li><a href="db-courses.html">Courses</a></li>
                            <li><a href="db-exams.html">Exams</a></li>
                            <li><a href="db-profile.html">Prfile</a></li>
                            <li><a href="db-time-line.html">Time line</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--HEADER SECTION-->
<section>
    <!-- TOP BAR -->
    <div class="ed-top">
        <div class="container">
            <div class="row">

                

            </div>
        </div>
    </div>
    </div>

    <!-- LOGO AND MENU SECTION -->
    <div class="top-logo" data-spy="affix" data-offset-top="250">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wed-logo">
                        <a href="index-2.html"><img src="images/logo.png" alt="" />
                        </a>
                    </div>
                    <div class="main-menu">
                        <ul>
                            <li><a href="/posts">posts</a>
                            </li>
                            <li class="about-menu">
                                <a href="{{ route('tests.index') }}">Take a new quiz!</a>
                                <div class="mm-pos">
                                </div>
                            </li>
                            <li><a href="{{route('IndexCourse')}}">All Course</a>
                                <li><a href="{{route('IndexLecure')}}">All Lecture</a>
                            
<li><a href="{{ route('decisions.index') }}">decisions </a>
                
                            <li><a href="events.html">Events</a>
                            </li>
                
                            <li><a href="{{ route('homeworks.index') }}">homeworks</a>

                            {{-- start login and register --}}
                            @if (Route::has('login'))
                            @auth
                               <li> <a class="nav-link" href="{{ url('/home') }}">Home</a></li> 
                            @else
                            <li>    
                            <a class="nav-link" href="{{ route('login') }}">login</a>
                        </li>    
                                @if (Route::has('register'))
                                <li>
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                                @endif
                            @endauth
                        </div>
                    @endif
        
                        {{-- end login and register --}}
                        </ul>
                    </div>
                </div>
                <div class="all-drop-down-menu">

                </div>

            </div>
        </div>
    </div>
</section>

<!--END HEADER SECTION-->




@yield('content')


















{{----------------------------------Start Footer-------------------------}}


<!-- FOOTER -->
<section class="wed-hom-footer">
    <div class="container">
        <!--<div class="row">
            <div class="col-md-12">
            <h4>About Wedding Planner</h4>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum</p>
            <p>more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
            <p></p>
          </div>
          </div>-->
        <div class="row wed-foot-link">
            <div class="col-md-4 foot-tc-mar-t-o">
                <h4>Top Courses</h4>
                <ul>
                    <li><a href="course-details.html">Accounting/Finance</a></li>
                    <li><a href="course-details.html">civil engineering</a></li>
                    <li><a href="course-details.html">Art/Design</a></li>
                    <li><a href="course-details.html">Marine Engineering</a></li>
                    <li><a href="course-details.html">Business Management</a></li>
                    <li><a href="course-details.html">Journalism/Writing</a></li>
                    <li><a href="course-details.html">Physical Education</a></li>
                    <li><a href="course-details.html">Political Science</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>New Courses</h4>
                <ul>
                    <li><a href="course-details.html">Sciences</a></li>
                    <li><a href="course-details.html">Statistics</a></li>
                    <li><a href="course-details.html">Web Design/Development</a></li>
                    <li><a href="course-details.html">SEO</a></li>
                    <li><a href="course-details.html">Google Business</a></li>
                    <li><a href="course-details.html">Graphics Design</a></li>
                    <li><a href="course-details.html">Networking Courses</a></li>
                    <li><a href="course-details.html">Information technology</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>HELP & SUPPORT</h4>
                <ul>
                    <li><a href="#">24x7 Live help</a>
                    </li>
                    <li><a href="#">Contact us</a>
                    </li>
                    <li><a href="#">Feedback</a>
                    </li>
                    <li><a href="#">FAQs</a>
                    </li>
                    <li><a href="#">Safety Tips</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row wed-foot-link-1">
            <div class="col-md-4 foot-tc-mar-t-o">
                <h4>Get In Touch</h4>
                <p>Address: 28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</p>
                <p>Phone: <a href="#!">+101-1231-4321</a></p>
                <p>Email: <a href="#!">info@edu.com</a></p>
            </div>
            <div class="col-md-4">
                <h4>DOWNLOAD OUR FREE MOBILE APPS</h4>
                <ul>
                    <li><a href="#"><span class="sprite sprite-android"></span></a>
                    </li>
                    <li><a href="#"><span class="sprite sprite-ios"></span></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>SOCIAL MEDIA</h4>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- COPY RIGHTS -->
<section class="wed-rights">
    <div class="container">
        <div class="row">
            <div class="copy-right">
                <a target="_blank" href="https://www.templateshub.net">Templates Hub</a>
            </div>
        </div>
    </div>
</section>

<!--SECTION LOGIN, REGISTER AND FORGOT PASSWORD-->
<section>
    <!-- LOGIN SECTION -->
    <div id="modal1" class="modal fade" role="dialog">
        <div class="log-in-pop">
            <div class="log-in-pop-left">
                <h1>Hello...</h1>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <h4>Login with social media</h4>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                    </li>
                    <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                    </li>
                </ul>
            </div>
            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                </a>
                <h4>Login</h4>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <form class="s12">
                    <div>
                        <div class="input-field s12">
                            <input type="text" data-ng-model="name" class="validate">
                            <label>User name</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="password" class="validate">
                            <label>Password</label>
                        </div>
                    </div>
                    <div>
                        <div class="s12 log-ch-bx">
                            <p>
                                <input type="checkbox" id="test5" />
                                <label for="test5">Remember me</label>
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s4">
                            <input type="submit" value="Login" class="waves-effect waves-light log-in-btn"> </div>
                    </div>
                    <div>
                        <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal3">Forgot password</a> | <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Create a new account</a> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- REGISTER SECTION -->
    <div id="modal2" class="modal fade" role="dialog">
        <div class="log-in-pop">
            <div class="log-in-pop-left">
                <h1>Hello...</h1>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <h4>Login with social media</h4>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                    </li>
                    <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                    </li>
                </ul>
            </div>
            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                </a>
                <h4>Create an Account</h4>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <form class="s12">
                    <div>
                        <div class="input-field s12">
                            <input type="text" data-ng-model="name1" class="validate">
                            <label>User name</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="email" class="validate">
                            <label>Email id</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="password" class="validate">
                            <label>Password</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="password" class="validate">
                            <label>Confirm password</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s4">
                            <input type="submit" value="Register" class="waves-effect waves-light log-in-btn"> </div>
                    </div>
                    <div>
                        <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Are you a already member ? Login</a> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- FORGOT SECTION -->
    <div id="modal3" class="modal fade" role="dialog">
        <div class="log-in-pop">
            <div class="log-in-pop-left">
                <h1>Hello... </h1>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <h4>Login with social media</h4>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                    </li>
                    <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                    </li>
                </ul>
            </div>
            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                </a>
                <h4>Forgot password</h4>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <form class="s12">
                    <div>
                        <div class="input-field s12">
                            <input type="text" data-ng-model="name3" class="validate">
                            <label>User name or email id</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s4">
                            <input type="submit" value="Submit" class="waves-effect waves-light log-in-btn"> </div>
                    </div>
                    <div>
                        <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Are you a already member ? Login</a> | <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Create a new account</a> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

{{----------------------------------End Footer-------------------------}}








<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/main.min.js') }}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/myJs.js') }}"></script>
<script src="{{ asset('js/materialize.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>



</body>

</html>
