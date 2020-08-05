<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
		  <ul class="navbar-nav">
				 @if (Route::has('login'))
					@auth
						<a class="nav-link" href="{{ url('/home') }}">Home</a>
					@else
						<a class="nav-link" href="{{ route('login') }}">@lang('site.login')</a>

						@if (Route::has('register'))
							<a class="nav-link" href="{{ route('register') }}">Register</a>
						@endif
					@endauth
				</div>
			@endif

			</li>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="{{URL::route('home')}}" >@lang('site.menu_home')</a>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							@lang('site.about college')
						</a>
						{{-- <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a href="{{route('setLocale','ar')}}">
								@lang('site.about college')	
							</a>
							<br>
							<a href="{{route('setLocale','en')}}">
								@lang('site.brief_about_college')
							</a>
							<br>
							<a href="{{route('setLocale','en')}}">
								@lang('site.general_decisions')							</a><br>
							<a href="{{route('setLocale','en')}}" class="cws_lang_link" title="English">
								@lang('site.menu_home')
							</a><br>
							<a href="{{route('setLocale','en')}}">
								@lang('site.sanctions_decisions')
							</a>


						</div>
					  </li> --}}
				
					  {{--  --}}
					
					  {{-- <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							@lang('site.Students_Affairs')
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a href="{{route('setLocale','ar')}}">
								@lang('site.about college')	
							</a>
							<br>
							<a href="{{route('setLocale','en')}}">
								@lang('site.brief_about_college')
							</a>
							<br>
							<a href="{{route('setLocale','en')}}">
								@lang('site.general_decisions')							</a><br>
							<a href="{{route('setLocale','en')}}" class="cws_lang_link" title="English">
								@lang('site.menu_home')
							</a><br>
							<a href="{{route('setLocale','en')}}">
								@lang('site.sanctions_decisions')
							</a>


						</div>
					  </li>
				 --}}
					  {{--  --}}
					{{-- <li class="nav-item">
						<a class="nav-link" href="{{URL::route('home')}}" >@lang('site.menu_gallery')</a>
					</li>
								<li class="nav-item">
									<a class="nav-link" href="{{URL::route('home')}}" >@lang('site.menu_contact_us')</a>
								</li>
				  
				  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  lang
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a href="{{route('setLocale','ar')}}" class="cws_lang_link" title="বাংলা">
							arabic
						</a>
						<br>
						<a href="{{route('setLocale','en')}}" class="cws_lang_link" title="English">
						English
						</a>
					</div>
				  </li>
			
				</ul>
			  </div>
			
		</nav> --}}

</header>
    