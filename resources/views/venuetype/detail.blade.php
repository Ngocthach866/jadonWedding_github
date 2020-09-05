<!-- lưu tại /resources/views/venue/create.blade.php -->
@extends('layouts.app')
@section('title', 'venue - create new')
@section('content')
<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"> Detail</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}

                        <div class="card-body">

                        <div class="form-group">
                                <label for="txt- Id">venuetype  Id</label>
                                <input type="text" class="formcontrol" id="txt- Id" name=" Id"
                                     value="{{$p-> Id}}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="txt-name">venuetype  name</label>
                                <input type="text" class="formcontrol" id="txt-name" name="name"
                                value="{{$p->name}}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="txt-category">venuetype  category</label>
                                <input type="text" class="formcontrol" id="txt-category" name="category"
                                value="{{$p->category}}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="txt-master">venuetype  master</label>
                                <input type="text" class="formcontrol" id="txt-master" name="master"
                                value="{{$p->master}}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="picture">Venuetype  Picture</label>
                                <img src="{{ url('picture/'.$p->picture) }}" width="300px" alt="">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-fileinput" id="image" name="image">
                                        <label class="custom-filelabel" for="picture">Choose Picture</label>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label>venuetype type specification</label>
                                <textarea class="formcontrol" rows="3" name="specification"
                                  >"{{$p->specification}}" readonly</textarea>
                            </div>
                           
                            <div class="form-group">
                                <label for="txt-clientinput_id">venuetype clientinput_id</label>
                                <input type="text" class="formcontrol" id="txt-clientinput_id" name="clientinput_id"
                                value="{{$p->clientinput_id}}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="txt-control_id">venuetype control_id</label>
                                <input type="text" class="formcontrol" id="txt-control_id" name="control_id"
                                value="{{$p->control_id}}" readonly>
                            </div>

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