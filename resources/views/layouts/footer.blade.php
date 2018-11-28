
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script type="text/javascript" src="js/hover-dropdown.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/respond.min.js" ></script>

  <!--right slidebar-->
    <script src="js/slidebars.min.js"></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!--  -->
    <script type="text/javascript" src="assets/fuelux/js/spinner.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
    <script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
    <script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
    <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="assets/bootstrap-daterangepicker/moment.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
    <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script type="text/javascript" src="assets/jquery-multi-select/js/jquery.multi-select.js"></script>
    <script type="text/javascript" src="assets/jquery-multi-select/js/jquery.quicksearch.js"></script>

    {{--  Drop Zone  --}}
    <script type="text/javascript" src="assets/dropzone/dropzone.js"></script>

    <!--select2-->
    <script type="text/javascript" src="assets/select2/js/select2.min.js"></script>

    <!--summernote-->
    <script src="assets/summernote/dist/summernote.min.js"></script>

    <!--this page  script only-->
    <script src="js/advanced-form-components.js"></script>


    <!--this page  script only-->
    <script src="js/advanced-form-components.js"></script>
    <script src="/js/bootstrap-tagsinput.min.js"></script>
    <script src="/js/bootstrap-select.min.js"></script>
    <script src="js/toastr.min.js"></script>
    <script type="text/javascript">
        @if ($flash = session('info'))
            toastr.info("{{$flash}}");
        @endif
        @if ($flash = session('error'))
            toastr.info("{{$flash}}");
        @endif


        $(document).ready(function () {
            $('#checkbox1').change(function () {
                if (!this.checked) 
                //  ^
                    $('#autoUpdate').fadeIn('slow');
                else 
                    $('#autoUpdate').fadeOut('slow');
                    $("#autoUpdate").prop('required',false);
            });
            $('#checkbox2').change(function () {
                if (!this.checked) 
                //  ^
                    $('#autoUpdate2').fadeIn('slow');
                else 
                    $('#autoUpdate2').fadeOut('slow');
                    $("#autoUpdate2").prop('required',false);
            });
            $('#checkbox3').change(function () {
                if (!this.checked) 
                //  ^
                    $('#autoUpdate3').fadeIn('slow');
                else 
                    $('#autoUpdate3').fadeOut('slow');
                    $("#autoUpdate3").prop('required',false);
            });
            $('#checkbox4').change(function () {
                if (!this.checked) 
                //  ^
                    $('#autoUpdate4').fadeIn('slow');
                else 
                    $('#autoUpdate4').fadeOut('slow');
                    $("#autoUpdate4").prop('required',false);
            });
        });
    </script>
  </body>
</html>
