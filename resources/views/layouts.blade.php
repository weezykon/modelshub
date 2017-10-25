@include('layouts/header')
	<style type="text/css">
		.sidebar-bg{
			background: url(images/cover/{{Auth::user()->cover}})  no-repeat !important;
			background-size: cover !important;
    		margin-bottom: 10px;
		}
		/* cover-panel */
		.cover-section{
			width: 100%;
		}

		.cover-panel{
			width: 100%;
			height: 150px;
			background: url(images/cover/{{Auth::user()->cover}})  no-repeat !important;
			background-size: cover !important;
		}

		/* name-panel */
		.name-panel{
			position: relative;
		    width: 100%;
		    height: 50px;
		    background: #fff;
		    top: 100px;
		}

		/* picture-panel */
		.picture-panel{
		    position: relative;
		    top: -30px;
		    left: 10px;
		}
		.info-panel{
			padding-top: 5px;
    		right: 20px;
    		position: relative;
		}
		.info-panel h1{
			font-size: 20px;
			margin: 0px;
		}
	</style>
  <body class="full-width">

  <section id="container" class="">
      <!--header start-->
      @include('layouts/nav')
      <!--header end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->        
				<div class="row">
              		@yield('accounttype')
              		@if (Route::current()->getName() != 'accounttype')
              			@include('layouts/right-sidebar')
              		@endif
              	</div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2013 &copy; Models Hub.
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>
@include('layouts/footer')
@yield('footer')