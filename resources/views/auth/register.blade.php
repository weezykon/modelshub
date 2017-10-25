@include('layouts/header')

<body class="login-body">
    <div class="container">
        <form class="form-signin" method="POST" action="/signup">
            {{ csrf_field() }}
            <h2 class="form-signin-heading">register now</h2>
            <div class="login-wrap">
                <p>Enter your personal details below</p>
                <input type="text" name="firstname" class="form-control" placeholder="First Name" required="">
                <input type="text" name="lastname" class="form-control" placeholder="Last Name" required="">
                <!-- <input type="text" name="username" class="form-control" placeholder="Username" required=""> -->
                <p id="Username" class="reg-warning"></p>
                <input type="text" name="username" placeholder="Username" oninput="duplicateUsername(this)" class="form-control" required="">
                <p id="Email" class="reg-warning"></p>
                <input type="email" name="email" class="form-control"  oninput="duplicateEmail(this)" placeholder="Email" required="">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <label class="checkbox">
                    <input type="checkbox" value="agree this condition" required=""> I agree to the Terms of Service and Privacy Policy
                </label>
                <button class="btn btn-lg btn-amber btn-block" type="submit" id="regBtn">Register</button>

                <div class="registration">
                    Already A Member
                    <a class="" href="/login">
                        Login
                    </a>
                </div>
            </div>
        </form>
    </div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/toastr.min.js"></script>
    @if(count($errors))
        <script type="text/javascript">
                @foreach ($errors->all() as $error)
                    toastr.error("{{$error}}");
                @endforeach
        </script>
    @endif

    <script type="text/javascript">
        // Username
        function duplicateUsername(element){
            var username = $(element).val();
            $.ajax({
                type: "POST",
                url: '{{url('checkusername')}}',
                data: {username:username},
                dataType: "json",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(res) {
                    if(res.exists){
                        $('#Username').html('Username Exist');
                        document.getElementById("regBtn").disabled = true;
                    }else{
                        $('#Username').html('');
                        document.getElementById("regBtn").disabled = false;
                    }
                },
                error: function (jqXHR, exception) {

                }
            });
        }
        // Email
        function duplicateEmail(element){
            var email = $(element).val();
            $.ajax({
                type: "POST",
                url: '{{url('checkemail')}}',
                data: {email:email},
                dataType: "json",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(res) {
                    if(res.exists){
                        $('#Email').html('Email Exist');
                        document.getElementById("regBtn").disabled = true;
                    }else{
                        $('#Email').html('');
                        document.getElementById("regBtn").disabled = false;
                    }
                },
                error: function (jqXHR, exception) {

                }
            });
        }
    </script>
</body>