@extends ('layouts')
@section('accounttype')
  <div class="col-md-9">
  	<section class="error-wrapper">
        <i class="icon-404"></i>
        <h1>Oops!!!</h1>
        <h2>User not found</h2>
        <p>Dont worry <span class="user-error">{{$pro}}</span> would soon arrive. <a class="btn btn-amber" href="{{route('home')}}">Return Home</a></p>
    </section>
  </div>
@endsection('accounttype')