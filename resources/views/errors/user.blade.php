@extends ('layouts')
@section('accounttype')
  <div class="col-md-9">
  	<section class="error-wrapper">
        <i class="icon-404"></i>
        <h1>404</h1>
        <h2>page not found</h2>
        <p>Something went wrong or that page doesn’t exist yet. <a class="btn btn-darkgreen" href="{{route('home')}}">Return Home</a></p>
    </section>
  </div>
@endsection('accounttype')