@extends ('layouts')
@section('accounttype')
    <div class="col-md-12">
        <div class="white-panel">
            <h3>Model Shoots</h3>
            <span class="label label-warning">
                <b class="small">Note: Your Shoots Must Have High Resolution, It must be clear also, becuase they would be presented</b>
            </span>
            <hr/>
            <div class="row">
                {{ csrf_field() }}
                <div class="col-md-12">
                    <form action="/modelshoot" method="POST" class="dropzone" id="my-awesome-dropzone" enctype="multipart/form-data">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                    </form>
                </div>
                <div class="form-group col-md-12">
                    <a href="/" role="button" class="btn btn-purple-outline">Finish <i class="fa fa-check-square"></i></a>
                </div>
            </div>
        </div>
    </div>  
@endsection('accounttype')