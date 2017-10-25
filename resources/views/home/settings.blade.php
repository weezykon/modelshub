@extends ('layouts')
@section('accounttype')
	<div class="col-md-3">
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
      <table class="table table-hover personal-task" style="border-top: 20px solid #F1F2F7;">
          <tbody>
            <tr class="active" id="Account" onclick="account()">
                <td>Account</td>
                <td><i class="fa fa-angle-right"></i></td>
            </tr>
            <tr id="Security" onclick="security()">
                <td>Security</td>
                <td><i class="fa fa-angle-right"></i></td>
            </tr>
            <tr id="Contact" onclick="contact()">
                <td>Contact</td>
                <td><i class="fa fa-angle-right"></i></td>
            </tr>
          </tbody>
      </table>
    </section>
  </div>
	<div class="col-md-6">
    <section class="panel" id="AccountPanel" style="display: block;">
      <header class="panel-heading">
        Account Settings
      </header>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-12">
            <form method="POST" action="/updateaccount">
              {{ csrf_field() }}
              <div class="form-group col-md-6">
                <span>Firstname</span>
              </div>
              <div class="form-group col-md-6">
                <input type="text" name="firstname" class="form-control" value="{{ $user->firstname }}">
              </div>
              <div class="form-group col-md-6">
                <span>Lastname</span>
              </div>
              <div class="form-group col-md-6">
                <input type="text" name="lastname" class="form-control" value="{{ $user->lastname }}">
              </div>
              <div class="form-group col-md-6">
                <span>Email</span>
              </div>
              <div class="form-group col-md-6">
                <input type="email" name="email" class="form-control" value="{{$user->email}}">
              </div>
              <div class="form-group col-md-6">
                <button class="btn btn-amber" type="submit">Save Changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="panel" id="SecurityPanel" style="display: none;">
      <header class="panel-heading">
        Security
      </header>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-12">
            <form id="UpdateSecurity">
              {{ csrf_field() }}
              <div class="form-group col-md-6">
                <span>Password</span>
              </div>
              <div class="form-group col-md-6">
                <input type="password" name="password" class="form-control" required="">
              </div>
              <div class="form-group col-md-6">
                <button class="btn btn-amber" id="UpdateSecurityBtn" type="submit">Save Changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="panel" id="ContactPanel" style="display: none;">
      <header class="panel-heading">
        Contact
      </header>
      <div class="panel-body">
        <div class="row">
          @if(!empty($models))
            <form id="UpdateModel">
              {{ csrf_field() }}
              <div class="form-group col-md-6">
                <span>Phone</span>
              </div>
              <div class="form-group col-md-6">
                <input type="text" name="phone" class="form-control" value="{{ $models[0]->phone }}">
              </div>
              <div class="form-group col-md-6">
                Town
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="town" value="{{ $models[0]->town }}">
              </div>
              <div class="form-group col-md-6">
                Website
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="website" value="{{ $models[0]->website }}">
              </div>
              <div class="form-group col-md-3">
                Languages
              </div>
              <div class="form-group col-md-9">
                <input type="text" name="languages" class="form-control" data-role="tagsinput" value="{{ $models[0]->languages }}">
              </div>
              <div class="form-group col-md-3">
                <span>Address</span>
              </div>
              <div class="form-group col-md-9">
                <textarea name="address" rows="3" class="form-control">{{ $models[0]->address }}</textarea>
              </div>
              <div class="form-group col-md-3">
                <span>Bio</span>
              </div>
              <div class="form-group col-md-9">
                <textarea name="bio" rows="3" class="form-control">{{ $models[0]->bio }}</textarea>
              </div>
              <div class="form-group col-md-6">
                <button class="btn btn-amber" id="UpdateModelBtn" type="submit">Save Changes</button>
              </div>
            </form>
          @elseif(!empty($members))
            <form id="UpdateMember">
              {{ csrf_field() }}
              <div class="form-group col-md-6">
                <span>Phone</span>
              </div>
              <div class="form-group col-md-6">
                <input type="text" name="phone" class="form-control" value="{{ $members[0]->phone }}">
              </div>
              <div class="form-group col-md-6">
                Town
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="town" value="{{ $members[0]->town }}">
              </div>
              <div class="form-group col-md-6">
                Website
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="website" value="{{ $members[0]->website }}">
              </div>
              <div class="form-group col-md-3">
                Languages
              </div>
              <div class="form-group col-md-9">
                <input type="text" name="languages" class="form-control" data-role="tagsinput" value="{{ $members[0]->languages }}">
              </div>
              <div class="form-group col-md-3">
                <span>Address</span>
              </div>
              <div class="form-group col-md-9">
                <textarea name="address" rows="3" class="form-control">{{ $members[0]->address }}</textarea>
              </div>
              <div class="form-group col-md-3">
                <span>Bio</span>
              </div>
              <div class="form-group col-md-9">
                <textarea name="bio" rows="3" class="form-control">{{ $members[0]->bio }}</textarea>
              </div>
              <div class="form-group col-md-6">
                <button class="btn btn-amber" id="UpdateMemberBtn" type="submit">Save Changes</button>
              </div>
            </form>
          @endif
        </div>
      </div>
    </section>
	</div>
@endsection('accounttype')
<script type="text/javascript">
  function account(){
    document.getElementById('Account').setAttribute("class", "active");
    document.getElementById('Security').setAttribute("class", "");
    document.getElementById('Contact').setAttribute("class", "");
    document.getElementById('AccountPanel').style.display = "block";
    document.getElementById('SecurityPanel').style.display = "none";
    document.getElementById('ContactPanel').style.display = "none";
  }

  function security(){
    document.getElementById('Account').setAttribute("class", "");
    document.getElementById('Contact').setAttribute("class", "");
    document.getElementById('Security').setAttribute("class", "active");
    document.getElementById('AccountPanel').style.display = "none";
    document.getElementById('SecurityPanel').style.display = "block";
    document.getElementById('ContactPanel').style.display = "none";
  }

  function contact(){
    document.getElementById('Account').setAttribute("class", "");
    document.getElementById('Security').setAttribute("class", "");
    document.getElementById('Contact').setAttribute("class", "active");
    document.getElementById('AccountPanel').style.display = "none";
    document.getElementById('SecurityPanel').style.display = "none";
    document.getElementById('ContactPanel').style.display = "block";
  }
</script>
@section('footer')
    <script type="text/javascript">
        // Update Security
        $('#UpdateSecurity').submit(function(event){
          document.getElementById("UpdateSecurityBtn").disabled = true;
          document.getElementById("UpdateSecurityBtn").innerHTML = "Saving...";
          event.preventDefault();
          $.ajax({
            url: "updatesecurity",
            method: "POST",
            data: $('form').serialize(),
            dataType: "text",
            success: function(strMessage){
              document.getElementById("UpdateSecurityBtn").disabled = false;
              document.getElementById("UpdateSecurityBtn").innerHTML = "Save Changes";
              toastr.success(strMessage);
            },
            error:function(strMessage){
              toastr.error('Please!! Try Again');
              document.getElementById("UpdateSecurityBtn").disabled = false;
              document.getElementById("UpdateSecurityBtn").innerHTML = "Save Changes";
            }
          })
        })

        // Update Member Info
        $('#UpdateMember').submit(function(event){
          document.getElementById("UpdateMemberBtn").disabled = true;
          document.getElementById("UpdateMemberBtn").innerHTML = "Saving...";
          event.preventDefault();
          $.ajax({
            url: "updatemember",
            method: "POST",
            data: $('form').serialize(),
            dataType: "text",
            success: function(strMessage){
              toastr.success(strMessage);
              document.getElementById("UpdateMemberBtn").disabled = false;
              document.getElementById("UpdateMemberBtn").innerHTML = "Save Changes";
            },
            error:function(strMessage){
              toastr.error('Please!! Try Again');
              document.getElementById("UpdateMemberBtn").disabled = false;
              document.getElementById("UpdateMemberBtn").innerHTML = "Save Changes";
            }
          })
        })

        // Update Model Info
        $('#UpdateModel').submit(function(event){
          document.getElementById("UpdateModelBtn").disabled = true;
          document.getElementById("UpdateModelBtn").innerHTML = "Saving...";
          event.preventDefault();
          $.ajax({
            url: "updatemodel",
            method: "POST",
            data: $('form').serialize(),
            dataType: "text",
            success: function(strMessage){
              toastr.success(strMessage);
              document.getElementById("UpdateModelBtn").disabled = false;
              document.getElementById("UpdateModelBtn").innerHTML = "Save Changes";
            },
            error:function(strMessage){
              toastr.error('Please!! Try Again');
              document.getElementById("UpdateModelBtn").disabled = false;
              document.getElementById("UpdateModelBtn").innerHTML = "Save Changes";
            }
          })
        })

        @if ($flash = session('message'))
          toastr.success("{{$flash}}");
        @endif
    </script>
@endsection('footer')