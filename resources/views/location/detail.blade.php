<!-- lưu tại /resources/views/location/create.blade.php -->
@extends('layouts.app')
@section('title', 'location - create new')
@section('content')
<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"> Detail Location</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}

                        <div class="card-body">

                        <div class="form-group">
                                <label for="txt-id">Location Id</label>
                                <input type="text" class="formcontrol" id="txt-id" 
                                name="id" value="{{$p->id}}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="txt-name">Location Name</label>
                                <input type="text" class="formcontrol" id="txt-name" name="name" value="{{$p->name}}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="txt-address">Location address</label>
                                <input type="text" class="formcontrol" id="txt-address" name="address" value="{{$p->address}}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="txt-from">date from location </label>
                                <input type="text" class="formcontrol" id="txt-from"
                                 name="from" value="{{$p->from}}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-to">date to location</label>
                                <input type="text" class="formcontrol" id="txt-to"
                                 name="to" value="{{$p->to}}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="txt-venuetype_id">Venue type id</label>
                                <input type="text" class="formcontrol" id="venuetype_id" 
                                name="venuetype_id" value="{{$p->venuetype_id}}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="txt-price">Location price</label>
                                <input type="text" class="formcontrol" id="txt-price" name="price" value="{{$p->price}}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="txt-expireddate">Expired date</label>
                                <input type="text" class="formcontrol" id="txt-expireddate" name="expireddate" value="{{$p->expireddate}}" readonly>
                            </div>

                            <div class="form-group">
                                <label>specification</label>
                                <textarea class="formcontrol" rows="3" name="specification"
                                   >"{{$p->specification}}" readonly</textarea>
                            </div>

                            <div class="form-group">
                                <label for="picture">location Picture</label>
                                <img src="{{ url('picture/'.$p->picture) }}" width="300px" alt="">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-fileinput" id="image" name="image">
                                        <label class="custom-filelabel" for="picture">Choose Picture</label>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="txt-control_id">Location control ID</label>
                                <input type="text" class="formcontrol" id="txt-control_id" name="control_id" value="{{$p->control_id}}" readonly>
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