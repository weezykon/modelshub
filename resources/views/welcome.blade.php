@extends ('layouts')
@section('accounttype')
	<div class="col-md-3">
      	<!--widget start-->
      	<section class="panel">
      		<div class="cover-section">
      			<div class="cover-panel">
      				<div class="name-panel">
      					<a href="/{{ Auth::user()->username }}" class="picture-panel">
		                  	<img src="/images/profile/{{Auth::user()->avatar}}" alt="" style="width: 60px; height:60px;border-radius: 50%;">
		              	</a>
		              	<div class="info-panel pull-right">
		              		<h1>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h1>
              				<a href="/{{ Auth::user()->username }}"><p><span>@</span><span>{{ Auth::user()->username }}</span></p></a>
		              	</div>
      				</div>
      			</div>
      		</div>
          	<div class="weather-category twt-category">
              	<ul>
                  	<li class="active">
                      	<h5>320</h5>
                      	Tweet
                  	</li>
                  	<li>
                      	<h5>1245</h5>
                      	Following
                  	</li>
                  	<li>
                      	<h5>24657</h5>
                      	Followers
                  	</li>
              </ul>
          	</div>
      	</section>
      	<!--widget end-->
  	</div>
  	<div class="col-md-6">
  	</div>
@endsection('accounttype')