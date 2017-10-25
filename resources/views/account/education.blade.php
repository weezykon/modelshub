@extends ('layouts')
@section('accounttype')
    <div class="col-md-6">
        <div class="white-panel">
            <form method="post" id="insert">
                <header class="panel-heading">
                    Educational Details
                </header>
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
                        <input type="checkbox" name="to" id="checkbox1">  Still Studying here
                        <!-- <input type="month" id="autoUpdate" name="to" class="form-control" required=""> -->
                        <div id="autoUpdate" data-date-minviewmode="months" data-date-viewmode="years" data-date-format="mm/yyyy" data-date="" class="two-width input-append date dpMonths">
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
            <hr/>
            <a href="/accountcertificate" role="button" class="btn btn-purple-outline">Continue <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-md-6">
        <div class="white-panel">    
            <h3>Education</h3>
            <hr/>
            <div id="showEducation"></div>
        </div>
    </div>
@endsection('accounttype')
@section('footer')
    <script type="text/javascript">
        // Add Education
        $('#insert').submit(function(event){
          event.preventDefault();
          $.ajax({
            url: "accounteducation",
            method: "POST",
            data: $('form').serialize(),
            dataType: "text",
            success: function(strMessage){
                toastr.info(strMessage);
                $('#insert')[0].reset();
            }
          })
        })
        
        // Load Education Details
        $.ajax({
          url:"/showeducation",
          dataType: "html",
          success: function(response){
            // console.log(response);
            $('#showEducation').html(response);
            // console.log(Result);
          }
        });

        var refreshId = setInterval(function() {
            $("#showEducation").load('showeducation');
        }, 10000);

        //Delete
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
    </script>
@endsection('footer')