@extends ('layouts')
@section('accounttype')
  <style type="text/css">
    .fb-timeline-img{
      height: 300px;
      background: url(images/cover/{{$user[0]->cover}})  no-repeat !important;
      background-size: cover !important;
    }
    .profiletext{
      margin-top: -10px;
      margin-left:10px;
    }
    .profiletext h2{
      margin: 0;
    }
  </style>
  <div class="col-md-9">
      <section class="panel">
          <div class="cover-photo">
              <div class="fb-timeline-img">
              </div>
          </div>
          <div class="panel-body">
              <div class="profile-thumb">
                  <img src="/images/profile/{{$user[0]->avatar}}" alt="">
              </div>
              <div class="profile-thumb profiletext">
                <h2><a>{{ $user[0]->lastname }} {{ $user[0]->firstname }}</a></h2>
                <a class="fb-user-mail">{{ $user[0]->username }}</a>
              </div>
              <div class="profile-thumb profiletext">
                <form>
                  <input type="" name="">
                  <button class="btn btn-sm btn-amber">Connect</button>
                </form>
              </div>
              @if(Auth::user()->id != $user[0]->id)
                @if($user[0]->type == 'Model')
                  <div class="profile-thumb profiletext">
                    <a href="/book" class="btn btn-sm btn-amber">Book</a>
                  </div>
                @endif
              @else
                <a href="{{route('settings')}}" class="pull-right">
                  <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon">
                    <g class="large-icon text-amber" style="fill: currentColor">
                      <path d="M21.71,5L19,2.29a1,1,0,0,0-1.41,0L4,15.85,2,22l6.15-2L21.71,6.45A1,1,0,0,0,22,5.71,1,1,0,0,0,21.71,5ZM6.87,18.64l-1.5-1.5L15.92,6.57l1.5,1.5ZM18.09,7.41l-1.5-1.5,1.67-1.67,1.5,1.5Z"></path>
                    </g>
                  </svg>
                </a>
              @endif
          </div>
          <hr/>
          <div class="panel-body text-center">
            @if(!empty($members))
              <h4>{{$members[0]->country}} &bull; {{$members[0]->state}} &bull; {{$members[0]->town}}</h4>
              <h5>{{$members[0]->bio}}</h5>
            @elseif(!empty($models))
              <h4 class="label label-default">{{$models[0]->gender}}</h4>
              <h4>{{$models[0]->country}} &bull; {{$models[0]->state}} &bull; {{$models[0]->town}}</h4>
              <h5>{{$models[0]->bio}}</h5>
            @endif
          </div>
          @if(!empty($models))
            <div class="bio-graph-heading">
              @foreach(explode(',', $models[0]->modeltype) as $modeltype) 
                <button class="btn btn-sm btn-default" style="margin: 5px;">{{$modeltype}} Model</button>
              @endforeach
            </div>
            <div class="panel-body bio-graph-info">
              <div class="row">
                  <div class="bio-row">
                      <p><span>Chest </span>: {{$models[0]->chest}}</p>
                  </div>
                  <div class="bio-row">
                      <p><span>Waist </span>: {{$models[0]->waist}}</p>
                  </div>
                  <div class="bio-row">
                      <p><span>Height </span>: {{$models[0]->height}}</p>
                  </div>
                  <div class="bio-row">
                      <p><span>Hair Color</span>: {{$models[0]->hair}}</p>
                  </div>
                  <div class="bio-row">
                      <p><span>Eye Color </span>: {{$models[0]->eye}}</p>
                  </div>
                  <div class="bio-row">
                      <p><span>shoe </span>: {{$models[0]->shoe}}</p>
                  </div>
              </div>
            </div>
          @endif
      </section>

      <section class="panel">
        <!-- Work Experience -->
        <div class="panel-body"> 
          <header class="panel-heading">
            Work Experience 
            @if(Auth::user()->id == $user[0]->id)
              <a data-toggle="modal" data-target="#WorkModal" class="pull-right">
                <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon"><g class="large-icon text-amber" style="fill: currentColor">
                  <path d="M21,13H13v8H11V13H3V11h8V3h2v8h8v2Z"></path>
                </g></svg>
              </a>
            @endif
          </header>
          <div class="panel-body" id="viewwork"></div>
        </div>
        <!-- Educations -->
        <div class="panel-body">
          <header class="panel-heading">
            Education 
            @if(Auth::user()->id == $user[0]->id)
              <a data-toggle="modal" data-target="#EducationModal"  class="pull-right">
                <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon"><g class="large-icon text-amber" style="fill: currentColor">
                  <path d="M21,13H13v8H11V13H3V11h8V3h2v8h8v2Z"></path>
                </g></svg>
              </a>
            @endif
          </header>
          <div class="panel-body" id="showEducation"></div>
        </div>
        <!-- Certifications -->
        <div class="panel-body">
          <header class="panel-heading">
            Certifications 
            @if(Auth::user()->id == $user[0]->id)
              <a data-toggle="modal" data-target="#CertModal"  class="pull-right">
                <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon"><g class="large-icon text-amber" style="fill: currentColor">
                  <path d="M21,13H13v8H11V13H3V11h8V3h2v8h8v2Z"></path>
                </g></svg>
              </a>
            @endif
          </header>
          <div class="panel-body" id="showCert"></div>
        </div>
        <!-- Pageantry -->
        @if(!empty($models))
          <div class="panel-body">
            <header class="panel-heading">
              Pageantry 
              @if(Auth::user()->id == $user[0]->id)
                <a data-toggle="modal" data-target="#PageantModal"  class="pull-right">
                  <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon"><g class="large-icon text-amber" style="fill: currentColor">
                    <path d="M21,13H13v8H11V13H3V11h8V3h2v8h8v2Z"></path>
                  </g></svg>
                </a>
              @endif
            </header>
            <div id="viewpageant"></div>
          </div>
        @endif
        <!-- Languages -->
        <div class="panel-body" class="panel-body">
          <header class="panel-heading">
            Languages
          </header>
          <div class="row">
            <div class="col-md-12">
              @if(!empty($members))
                @foreach(explode(',', $members[0]->languages) as $lang) 
                  <button class="btn btn-sm btn-info">{{$lang}}</button>
                @endforeach
              @elseif(!empty($models))
                @foreach(explode(',', $models[0]->languages) as $lang) 
                  <button class="btn btn-sm btn-info">{{$lang}}</button>
                @endforeach
              @endif
            </div>
          </div>
        </div>
      </section>
  </div>

<!-- Start Modals -->
  <!-- Work Modal -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="WorkModal" class="modal fade col-md-12">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Add Work Experience</h4>
        </div>
        <div class="modal-body">
          <form method="post" id="insertwork">
            <div class="row">
                {{ csrf_field() }}
                <div class="form-group col-md-6">
                    <span>Company</span>
                    <input type="text" name="company" class="form-control" required="">
                </div>
                <div class="form-group col-md-6">
                    <span>Title</span>
                    <input type="text" name="title" class="form-control" required="">
                </div>
                <div class="form-group col-md-6">
                    <span>Location</span>
                    <input type="text" name="location" class="form-control" required="">
                </div>
                <div class="form-group col-md-6">
                    <span>Start</span>
                    <!-- <input type="month" name="start" class="form-control" required=""> -->
                    <div data-date-minviewmode="months" data-date-viewmode="years" data-date-format="mm/yyyy" data-date="" class="two-width input-append date dpMonths">
                        <input type="text" readonly="" value="" name="startwork" required="" size="10" class="form-control">
                            <span class="input-group-btn add-on">
                                <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                            </span>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <span>End</span><br/>
                    <input type="checkbox" name="endwork" value="Present" id="checkbox1">  Still Working here
                    <!-- <input type="month" id="autoUpdate" name="end" class="form-control" required=""> -->
                    <div id="autoUpdate" data-date-minviewmode="months" data-date-viewmode="years" data-date-format="mm/yyyy" data-date="" class="two-width input-append date dpMonths">
                        <input type="text" readonly="" value="" name="endwork" required="" size="10" class="form-control">
                            <span class="input-group-btn add-on">
                                <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                            </span>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <span>Description (Optional)</span>
                    <textarea name="description" class="form-control" placeholder="Description" rows="5"></textarea>
                </div>
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-amber-outline">Add <i class="fa fa-plus"></i></button>
                </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Certificate Modal -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="CertModal" class="modal fade col-md-12">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Add Certifications</h4>
        </div>
        <div class="modal-body">
          <form method="post" id="insertcert">
            <div class="row">
                {{ csrf_field() }}
                <div class="form-group col-md-6">
                    <span>Certification Name</span>
                    <input type="text" name="cert_name" class="form-control" required="">
                </div>
                <div class="form-group col-md-6">
                    <span>Certificate Authority (Acquired from)</span>
                    <input type="text" name="authority" class="form-control" required="">
                </div>
                <div class="form-group col-md-6">
                    <span>License Number</span>
                    <input type="number" name="license" class="form-control" required="">
                </div>
                <div class="form-group col-md-6">
                    <span>Start</span>
                    <!-- <input type="month" name="start" class="form-control" required=""> -->
                    <div data-date-minviewmode="months" data-date-viewmode="years" data-date-format="mm/yyyy" data-date="" class="two-width input-append date dpMonths">
                        <input type="text" readonly="" value="" name="startcert" required="" size="10" class="form-control">
                            <span class="input-group-btn add-on">
                                <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                            </span>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <span>End</span><br/>
                    <input type="checkbox" name="endcert" value="Present" id="checkbox2">  On Going
                    <!-- <input type="month" id="autoUpdate" name="end" class="form-control" required=""> -->
                    <div id="autoUpdate2" data-date-minviewmode="months" data-date-viewmode="years" data-date-format="mm/yyyy" data-date="" class="two-width input-append date dpMonths">
                        <input type="text" readonly="" value="" name="endcert" required="" size="10" class="form-control">
                            <span class="input-group-btn add-on">
                                <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                            </span>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <span>Url</span><br/>(Optional)
                    <input type="url" name="url" class="form-control">
                </div>
                <div class="form-group col-md-12">
                    <span>Description (Optional)</span>
                    <textarea name="description" class="form-control" placeholder="Description" rows="5"></textarea>
                </div>
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-amber-outline">Add <i class="fa fa-plus"></i></button>
                </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Education Modal -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="EducationModal" class="modal fade col-md-12">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Add Education Details</h4>
        </div>
        <div class="modal-body">
          <form method="post" id="inserteducation">
            <div class="row">
                {{ csrf_field() }}
                <div class="form-group col-md-6">
                    <span>Institution/School</span>
                    <input type="text" name="school" class="form-control" required="">
                </div>
                <div class="form-group col-md-6">
                    <span>Degree</span>
                    <input type="text" name="degree" class="form-control" required="">
                </div>
                <div class="form-group col-md-6">
                    <span>Field of Study</span>
                    <input type="text" name="field" class="form-control" required="">
                </div>
                <div class="form-group col-md-6">
                    <span>Grade (Optional)</span>
                    <input type="text" name="grade" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <span>From</span><p></p>
                    <!-- <input type="month" name="from" class="form-control" required=""> -->
                    <div data-date-minviewmode="months" data-date-viewmode="years" data-date-format="mm/yyyy" data-date="" class="two-width input-append date dpMonths">
                        <input type="text" readonly="" value="" name="from" required="" size="10" class="form-control">
                            <span class="input-group-btn add-on">
                                <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                            </span>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <span>To</span><br/>
                    <input type="checkbox" name="to" id="checkbox3">  Still Studying here
                    <!-- <input type="month" id="autoUpdate" name="to" class="form-control" required=""> -->
                    <div id="autoUpdate3" data-date-minviewmode="months" data-date-viewmode="years" data-date-format="mm/yyyy" data-date="" class="two-width input-append date dpMonths">
                        <input type="text" readonly="" value="" name="to" required="" size="10" class="form-control">
                            <span class="input-group-btn add-on">
                                <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                            </span>
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <span>Description (Optional)</span>
                    <textarea name="description" class="form-control" placeholder="Description" rows="5"></textarea>
                </div>
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-amber-outline">Add <i class="fa fa-plus"></i></button>
                </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Pageantry Modal -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="PageantModal" class="modal fade col-md-12">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Add Pageantry Events</h4>
        </div>
        <div class="modal-body">
          <form method="post" id="insertpageant">
            <div class="row">
                {{ csrf_field() }}
                <div class="form-group col-md-6">
                    <span>Name</span>
                    <input type="text" name="pageantry" class="form-control" required="">
                </div>
                <div class="form-group col-md-6">
                    <span>Position</span>
                    <input type="text" name="position" class="form-control" required="">
                </div>
                <div class="form-group col-md-6">
                    <span>Start</span>
                    <!-- <input type="month" name="start" class="form-control" required=""> -->
                    <div data-date-minviewmode="months" data-date-viewmode="years" data-date-format="mm/yyyy" data-date="" class="two-width input-append date dpMonths">
                        <input type="text" readonly="" value="" name="startpageant" required="" size="10" class="form-control">
                            <span class="input-group-btn add-on">
                                <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                            </span>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <span>End</span><br/>
                    <input type="checkbox" name="endpageant" value="Present" id="checkbox4">  On Going
                    <!-- <input type="month" id="autoUpdate" name="end" class="form-control" required=""> -->
                    <div id="autoUpdate4" data-date-minviewmode="months" data-date-viewmode="years" data-date-format="mm/yyyy" data-date="" class="two-width input-append date dpMonths">
                        <input type="text" readonly="" value="" name="endpageant" required="" size="10" class="form-control">
                            <span class="input-group-btn add-on">
                                <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                            </span>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <span>Url (optional)</span>
                    <input type="text" name="url" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <span>Description (Optional)</span>
                    <textarea name="description" class="form-control" placeholder="Description" rows="5"></textarea>
                </div>
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-amber-outline">Add <i class="fa fa-plus"></i></button>
                </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
        </div>
      </div>
    </div>
  </div>
@endsection('accounttype')
@section('footer')
  <script type="text/javascript">
      //Work
      var user = "<?php echo $user[0]->id; ?>";
      $('#insertwork').submit(function(event){
        event.preventDefault();
        $.ajax({
          url: "accountwork",
          method: "POST",
          data: $('form').serialize(),
          dataType: "text",
          success: function(strMessage){
            $('#WorkModal').modal('hide');
            toastr.info(strMessage);
            $('#insertwork')[0].reset();
          }
        })
      })
      $.ajax({
        url:"/profilework/"+user,
        dataType: "html",
        success: function(response){
          // console.log(response);
          $('#viewwork').html(response);
          // console.log(Result);
        }
      });

      var refreshId = setInterval(function() {
          $("#viewwork").load('profilework/'+user);
      }, 10000);

      $(document).on('click', '.work-delete-button', function(){ 
          var wid = $(this).attr("wid"); 
          $.ajax({
              url: "deletework/"+wid,
              dataType: "text",
              success: function(response){
                  $('#pre'+wid).hide(1000);
                  toastr.info(response);
              },
              error:function(response){
                  toastr.error('Please!! Try Again');
              }
          })
      });


      // Pageant
      $('#insertpageant').submit(function(event){
        event.preventDefault();
        $.ajax({
          url: "accountpageant",
          method: "POST",
          data: $('form').serialize(),
          dataType: "text",
          success: function(strMessage){
            $('#PageantModal').modal('hide');
              toastr.info(strMessage);
              $('#insertpageant')[0].reset();
          }
        })
      })

      $.ajax({
        url:"/profilepageant/"+user,
        dataType: "html",
        success: function(response){
          // console.log(response);
          $('#viewpageant').html(response);
          // console.log(Result);
        }
      });

      var refreshId = setInterval(function() {
          $("#viewpageant").load('showpageant/'+user);
      }, 10000);

      $(document).on('click', '.pageant-delete-button', function(){ 
          var pid = $(this).attr("pid"); 
          $.ajax({
              url: "deletepageant/"+pid,
              dataType: "text",
              success: function(response){
                  $('#pre'+pid).hide(1000);
                  toastr.info(response);
              },
              error:function(response){
                  toastr.error('Please!! Try Again');
              }
          })
      });


      // Education
      $('#inserteducation').submit(function(event){
        event.preventDefault();
        $.ajax({
          url: "accounteducation",
          method: "POST",
          data: $('form').serialize(),
          dataType: "text",
          success: function(strMessage){
            $('#EducationModal').modal('hide');
              toastr.info(strMessage);
              $('#inserteducation')[0].reset();
          }
        })
      })

      $.ajax({
        url:"/profileeducation/"+user,
        dataType: "html",
        success: function(response){
          // console.log(response);
          $('#showEducation').html(response);
          // console.log(Result);
        }
      });

      var refreshId = setInterval(function() {
          $("#showEducation").load('showeducation/'+user);
      }, 10000);

      $(document).on('click', '.education-delete-button', function(){ 
          var eid = $(this).attr("eid"); 
          $.ajax({
              url: "deleteeducation/"+eid,
              dataType: "text",
              success: function(response){
                  $('#pre'+eid).hide(1000);
                  toastr.info(response);
              },
              error:function(response){
                  toastr.error('Please!! Try Again');
              }
          })
      });


      // Certificate
      $('#insertcert').submit(function(event){
        event.preventDefault();
        $.ajax({
          url: "/accountcertificate",
          method: "POST",
          data: $('form').serialize(),
          dataType: "text",
          success: function(strMessage){
            $('#CertModal').modal('hide');
              toastr.info(strMessage);
              $('#insertcert')[0].reset();
          }
        })
      })
      
      $.ajax({
        url:"/profilecertification/"+user,
        dataType: "html",
        success: function(response){
          // console.log(response);
          $('#showCert').html(response);
          // console.log(Result);
        }
      });

      var refreshId = setInterval(function() {
          $("#showCert").load('showcertification/'+user);
      }, 10000);

      $(document).on('click', '.cert-delete-button', function(){ 
          var cid = $(this).attr("cid"); 
          $.ajax({
              url: "deletecertificate/"+cid,
              dataType: "text",
              success: function(response){
                  $('#pre'+cid).hide(1000);
                  toastr.info(response);
              },
              error:function(response){
                  toastr.error('Please!! Try Again');
              }
          })
      });
  </script>
@endsection('footer')