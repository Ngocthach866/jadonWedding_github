<!-- lưu tại /resources/views/venue/create.blade.php -->
@extends('layouts.app')
@section('title', 'product - create new')
@section('content')
<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Update {{ $p->name }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ url('venue/postUpdate/'.$p->id) }}" method="post"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="card-body">

                            <div class="form-group">
                                <label for="txt-id">venue Id</label>
                                <input type="text" class="formcontrol" id="txt-id" name="id"
                                    value = "{{$p->id}}" readonly> 
                            </div>

                            <div class="form-group">
                                <label for="txt-project_id">Venue project ID</label>
                                <input type="text" class="formcontrol" id="txt-project_id" name="project_id"
                                value = "{{$p->project_id}}">
                            </div>

                            <div class="form-group">
                                <label for="txt-client_id">Venue client ID</label>
                                <input type="text" class="formcontrol" id="txt-client_id" name="client_id"
                                value = "{{$p->client_id}}">
                            </div>

                            <div class="form-group">
                                <label for="txt-requirement_id">venue requirement_id </label>
                                <input type="text" class="formcontrol" id="txt-requirement_id" name="requirement_id"
                                value = "{{$p->requirement_id}}">
                            </div>

                            <div class="form-group">
                                <label for="txt-venuetype_id"> venuetype_id</label>
                                <input type="text" class="formcontrol" id="venuetype_id" name="venuetype_id"
                                value = "{{$p->venuetype_id}}">
                            </div>

                            <div class="form-group">
                                <label for="txt-location_id">location_id</label>
                                <input type="text" class="formcontrol" id="txt-location_id" name="location_id"
                                value = "{{$p->location_id}}">
                            </div>

                            <div class="form-group">
                                <label for="picture">Venue Picture</label>
                                <img src="{{ url('images/'.$p->picture) }}" width="300px" alt="venue">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-fileinput" id="image" name="image">
                                        <label class="custom-filelabel" for="image">Choose Picture</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="txt-clientinput_id">clientinput_id</label>
                                <input type="text" class="formcontrol" id="txt-clientinput_id" name="clientinput_id"
                                 value = "{{$p->clientinput_id}}">
                            </div>

                            <div class="form-group">
                                <label for="txt-control_id">control_id</label>
                                <input type="text" class="formcontrol" id="txt-control_id" name="control_id" 
                                value = "{{$p->control_id}}">
                            </div>

                            <div class="form-group">
                                <label for="txt-program_id">program_id</label>
                                <input type="text" class="formcontrol" id="txt-program_id" name="program_id"
                                value = "{{$p->program_id}}">
                            </div>  

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btnprimary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
@endsection
@section('script-section')
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-fileinput.min.js') }}"></script>
<script type="text/javascript">
$(document).ready(function() {
    bsCustomFileInput.init();
});
</script>
@endsection