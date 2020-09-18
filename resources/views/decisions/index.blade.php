@extends('Master.Main')
@section('content')

<section>
  @if ($user = auth::user())
  <div class="ed-res-bg">
    <div class="container com-sp pad-bot-70 ed-res-bg">
  <div class="row">
    <div class="cor about-sp">
      <div class="ed-rsear">
        <div class="ed-rsear-in">
          <ul>
            @foreach ($decisions as $decision)
            <li>
              <div class="ed-rese-grid">
                <div class="ed-rsear-img ed-faci-full-top">
                  <img src="{{asset('storage/'.$decision->image)}}" alt="">
                            </div>
                            <div class="ed-rsear-dec ed-faci-full-bot">
                <h4><a href="facilities-detail.html">{{$decision->title}}</a></h4>
                @if ($user->hasRole('super_admin'))
                <a href="{{route('decisions.edit',$decision->id)}}" class="btn btn-success"><i class="far fa-edit"></i> edit</a>
                <form method="POST" action="{{route('decisions.destroy',$decision->id)}}" style="display: inline-block;" >
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i> delete</button>
              </form>
                                     
                @endif
                <p>The Design and Technology Suite is an ensemble of various specialist areas and rooms which offer students the potential to explore a variety of design </p>
                <a href="{{route('decisions.show',$decision->id)}}" class="read-line-btn"><i class="fas fa-angle-double-right"></i> Read more</a>
              </div>
            </div>
          </li>
          
          @endforeach
                      </ul>
                  </div>
              </div>
              <div class="ed-about-sec1">
                  <div class="col-md-6"></div>
                  <div class="col-md-6"></div>
              </div>
          </div>
      </div>
  </div>
</div>
</section>
@endif
{{-- 
            <h5 class="card-title">{{$decision->title}}</h5>
            @if ($user->hasRole('super_admin'))
            <a href="{{route('decisions.edit',$decision->id)}}" class="btn btn-success">edit</a>
            <form method="POST" action="{{route('decisions.destroy',$decision->id)}}" style="display: inline-block;" >
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">delete</button>
          </form>
                                 
            @endif
            <a href="{{route('decisions.show',$decision->id)}}" class="btn btn-primary">Show decision</a>
            </div>
          </div>
        </div>
        @endif  --}}
@endsection