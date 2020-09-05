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
                        <h3 class="card-title">Create Location</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ url('location/postCreate') }}" method="post"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="card-body">
                       
                            <div class="form-group">
                                <label for="txt-id">Location Id</label>
                                <input type="text" class="formcontrol" id="txt-id" name="id"
                                    placeholder="Input location Id">
                            </div>

                            <div class="form-group">
                                <label for="txt-name">Location name</label>
                                <input type="text" class="formcontrol" id="txt-name" name="name"
                                    placeholder="Input location Name">
                            </div>

                            <div class="form-group">
                                <label for="txt-address">Location Address</label>
                                <input type="text" class="formcontrol" id="txt-address" name="address"
                                    placeholder="Input location Name">
                            </div>

                            <div class="form-group">
                                <label for="txt-from">date from location </label>
                                <input type="text" class="formcontrol" id="txt-from" name="from"
                                    placeholder="Input date from">
                            </div>
                            <div class="form-group">
                                <label for="txt-to">date to location</label>
                                <input type="text" class="formcontrol" id="txt-to" name="to"
                                    placeholder="Input date to">
                            </div>


                            <div class="form-group">
                                <label for="venuetype_id">venuetype_id</label>
                                <select required name="venuetype_id" id="venuetype_id" style="color:grey;">
                                    <optgroup label="venuetype_id" style="color:black;">
                                        @if ($requirement!= null)
                                        @foreach ($venuetype as $venuet)
                                        <option value="{{$venuet->id}}">{{$venuet->id}}</option>
                                        @endforeach
                                        @endif
                                    </optgroup>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="txt-price">Location price</label>
                                <input type="text" class="formcontrol" id="txt-price" name="price"
                                    placeholder="Input Location price">
                            </div>

                            <div class="form-group">
                                <label for="txt-expireddate">Location Expired date</label>
                                <input type="text" class="formcontrol" id="txt-expireddate" name="expireddate" placeholder="Input Location Location Expired date">
                            </div>

                            <div class="form-group">
                                <label>Location specification</label>
                                <textarea class="formcontrol" rows="3" name="specification"
                                    placeholder="Enter ..."></textarea>
                            </div>

                            <div class="form-group">
                                <label for="picture">Location Picture</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-fileinput" id="picture" name="picture">
                                        <label class="custom-filelabel" for="picture">Choose Picture</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="txt-control_id">Location control ID</label>
                                <input type="text" class="formcontrol" id="txt-control_id" name="control_id"  placeholder="Input location control ID">
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