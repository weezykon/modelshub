<header class="header white-bg">
    <div class="navbar-header">
        @if (Route::current()->getName() != 'accounttype')
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="fa fa-bars"></span>
        </button>
        @endif

        <!--logo start-->
        <a href="{{route('home')}}" class="logo" >Models<span>Hub</span></a>
        <!--logo end-->
        @if (Route::current()->getName() != 'accounttype')
        <div class="horizontal-menu navbar-collapse collapse ">
          <ul class="nav navbar-nav">
              @if (Route::current()->getName() == 'home')
                <li class="active"><a href="{{route('home')}}">Home</a></li>
              @else
                <li class=""><a href="{{route('home')}}">Home</a></li>
              @endif
              <li><a href="">Notifications <span class="notify-row"><i class="fa fa-circle text-danger"></i></span></a></li>
          </ul>
        </div>
        @endif
        <div class="top-nav ">
          <ul class="nav pull-right top-menu">
              <li>
                  <input type="text" class="form-control search" placeholder=" Search">
              </li>
              <!-- user login dropdown start-->
              <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="horizontal_menu.html#">
                      <img alt="" src="/images/profile/{{Auth::user()->avatar}}" width="30px" height="30px">
                  </a>
                  <ul class="dropdown-menu extended logout">
                      <div class="log-arrow-up"></div>
                      <li><a href="/{{Auth::user()->username}}"><i class=" fa fa-user"></i>Profile</a></li>
                      <li><a href="{{route('settings')}}"><i class="fa fa-cog"></i> Settings</a></li>
                      <li><a href="/notifications"><i class="fa fa-bell-o"></i> Notification</a></li>
                      <li><a href="/logout "><i class="fa fa-key"></i> Log Out</a></li>
                  </ul>
              </li>
              <!-- user login dropdown end -->
          </ul>
        </div>
    </div>
</header>