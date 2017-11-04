@extends ('layouts')
@section('accounttype')
        <div class="col-md-12">
            <div class="white-panel">
                <form method="post" action="/avatar" enctype="multipart/form-data">
                    <h3>Upload Profile Picture</h3>
                    <hr/>
                    <div class="row">
                        {{ csrf_field() }}
                        <div class="form-group col-md-12 row-center">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <input type="hidden">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="">
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px;">
                                </div>
                                <div>
                                    <span class="btn btn-white btn-file">
                                        <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select Avatar</span>
                                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                        <input type="file" class="default" name="image" required="">
                                    </span>
                                    <span class="label label-warning">
                                        <b class="small">Less Than 2MB</b>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                        <hr/>
                            <button type="submit" class="btn btn-amber-outline">Upload <i class="fa fa-arrow-circle-right"></i></button>
                            <a href="/cover" role="button" class="btn btn-purple-outline">Skip <i class="fa fa-times-circle-o"></i></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>  
@endsection('accounttype')