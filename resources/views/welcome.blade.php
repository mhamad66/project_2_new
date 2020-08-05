@extends('layouts.welcome')
@section('link')
	<link  rel="stylesheet" href="{{ asset('css/frontend/css/home.css') }}" />
    
@endsection
@section('content')
<!-- Start slider -->
<div class="slider d-none d-lg-block">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active carousel-one" style="background-image: url({{asset('images/frontEnd/books-classroom-close-up-college-289737.jpg')}})">
            </div>
            <div class="carousel-item carousel-two" style="background-image: url({{asset('images/frontEnd/row-of-books-in-shelf-256541.jpg')}})">
            </div>
            <div class="carousel-item carousel-three" style="background-image: url({{asset('images/frontEnd/books-classroom-close-up-college-289737.jpg')}})">
            </div>
            <div class="carousel-item carousel-four"style="background-image: url({{asset('images/frontEnd/books-classroom-close-up-college-289737.jpg')}})">
            </div>
            <div class="carousel-item carousel-five" style="background-image: url({{asset('images/frontEnd/books-classroom-close-up-college-289737.jpg')}})">
            </div>
        </div>
    </div>
</div>
<!-- End slider -->

{{-- <div class="imgStand" style="background-image: url({{asset('images/frontEnd/books-classroom-close-up-college-289737.jpg')}})">
</div> --}}
{{-- start latest news --}}
<div class="last_news text-center 	"> <h2>@lang('site.last_news')</h2>
</div>
{{-- end latest news --}}
{{--start slider  last news --}}
<div class="container">
<div class="row">
<div class="col-lg-6">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
          <img class="d-block w-100" src="{{asset('images/frontEnd/adult-blur-books-close-up-261909.jpg')}}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('images/frontEnd/adult-blur-books-close-up-261909.jpg')}}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('images/frontEnd/adult-blur-books-close-up-261909.jpg')}}" alt="Third slide">
          </div>
        </div>
      </div>
</div>
<div class="col-lg-6">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos, odio. Ea aliquam blanditiis odit modi suscipit error molestias rerum optio quod alias temporibus perspiciatis impedit velit, laudantium enim tenetur a?</div>
</div>
</div>
{{--  end  slider last news--}}
{{-- start Decisions --}}
<div class="decisions">
<h3 class="text-center">decisions</h3>
<div class="container">
<div class="row">
<div class="col-md-6"><div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{asset('images/frontEnd/adult-blur-books-close-up-261909.jpg')}}" alt="Card image cap">
    <div class="card-body">
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div></div>
<div class="col-md-6"><div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{asset('images/frontEnd/adult-blur-books-close-up-261909.jpg')}}" alt="Card image cap">
    <div class="card-body">
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div></div>

</div>
</div>
</div>
{{-- end Decisions --}}
{{-- start about --}}

<div class="container">
<div class="row">
    <div class="col-lg-6">
        <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Collapsible Group Item #1
                  </button>
                </h5>
              </div>
          
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Collapsible Group Item #2
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Collapsible Group Item #3
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>

    </div>
    <div class="col-lg-6">b</div>
</div>
</div>
{{-- end about --}}
@endsection