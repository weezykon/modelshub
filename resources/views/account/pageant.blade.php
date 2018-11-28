@extends ('layouts')
@section('accounttype')
    <div class="col-md-6">
        <div class="white-panel">
            <form method="post" id="insert">
                <h3>Pageantry</h3>
                <hr/>
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
                        <input type="checkbox" name="endpageant" value="Present" id="checkbox1">  On Going
                        <!-- <input type="month" id="autoUpdate" name="end" class="form-control" required=""> -->
                        <div id="autoUpdate" data-date-minviewmode="months" data-date-viewmode="years" data-date-format="mm/yyyy" data-date="" class="two-width input-append date dpMonths">
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
            <hr/>
            <a href="/accountwork" role="button" class="btn btn-purple-outline">Continue <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-md-6">
        <div class="white-panel">
            <h3>Pageantry</h3>
            <hr/>
            <div id="viewpageant"></div>
        </div>
    </div>  
@endsection('accounttype')
@section('footer')
    <script type="text/javascript">
        // Add Pageant
        $('#insert').submit(function(event){
          event.preventDefault();
          $.ajax({
            url: "accountpageant",
            method: "POST",
            data: $('form').serialize(),
            dataType: "text",
            success: function(strMessage){
                toastr.info(strMessage);
                $('#insert')[0].reset();
            }
          })
        })
        
        // Load Pageant Details
        $.ajax({
          url:"/showpageant",
          dataType: "html",
          success: function(response){
            // console.log(response);
            $('#viewpageant').html(response);
            // console.log(Result);
          }
        });

        var refreshId = setInterval(function() {
            $("#viewpageant").load('showpageant');
        }, 10000);

        //Delete
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
    </script>
@endsection('footer')