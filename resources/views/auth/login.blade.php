@include('layouts/header')

<body class="login-body">
    <div class="container">
        <form class="form-signin" method="POST" action="/login">
        {{ csrf_field() }}
            <h2 class="form-signin-heading">Log In</h2>
            <div class="login-wrap">
                <input type="text" name="username" class="form-control" placeholder="Username" required="">
                <input type="password" name="password" class="form-control" placeholder="Password" required="">
                <label class="checkbox">
                    <input type="checkbox" value="remember-me"> Remember me
                    <span class="pull-right">
                        <a data-toggle="modal" href="#myModal"> Forgot Password?</a>
                    </span>
                </label>
                <button class="btn btn-lg btn-amber btn-block" type="submit">Sign in</button>
                <p></p>
                <div class="registration">
                    Don't have an account yet?
                    <a class="" href="/register">
                        Create an account
                    </a>
                </div>
            </div>
            <!-- Modal -->
            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Forgot Password ?</h4>
                      </div>
                      <div class="modal-body">
                          <p>Enter your e-mail address below to reset your password.</p>
                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                          <button class="btn btn-success" type="button">Submit</button>
                      </div>
                  </div>
              </div>
            </div>
            <!-- modal -->
        </form>
    </div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/toastr.min.js"></script>
    <script type="text/javascript">
        @if ($flash = session('message'))
              toastr.error("{{$flash}}");
        @endif
    </script>
</body>