@extends ('layouts')
@section('accounttype') 
    <div class="col-md-6">
        <div class="white-panel">
            <form method="post" id="insert">
                <h3>Fill Your Work Details</h3>
                <hr/>
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
            <hr/>
            @if(Auth::user()->type == 'Mdoel')
                <a href="/accountpageant" role="button" class="btn btn-purple-outline">Continue <i class="fa fa-arrow-circle-right"></i></a>
            @else
                <a href="/" role="button" class="btn btn-purple-outline">Finish <i class="fa fa-check-square"></i></a>
            @endif
        </div>
    </div>
    <div class="col-md-6">
        <div class="white-panel">
            <h3>Work</h3>
            <hr/>
            <div id="viewwork"></div>
        </div>
    </div> 
@endsection('accounttype')
@section('footer')
    <script type="text/javascript">
        // Add Certificate
        $('#insert').submit(function(event){
          event.preventDefault();
          $.ajax({
            url: "accountwork",
            method: "POST",
            data: $('form').serialize(),
            dataType: "text",
            success: function(strMessage){
                toastr.info(strMessage);
                $('#insert')[0].reset();
            }
          })
        })
        
        // Load Work Details
        $.ajax({
          url:"/showwork",
          dataType: "html",
          success: function(response){
            // console.log(response);
            $('#viewwork').html(response);
            // console.log(Result);
          }
        });

        var refreshId = setInterval(function() {
            $("#viewwork").load('showwork');
        }, 10000);

        //Delete
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
    </script>
@endsection('footer')