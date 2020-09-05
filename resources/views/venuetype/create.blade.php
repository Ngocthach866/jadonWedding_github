<!-- lưu tại /resources/views/venuetype/create.blade.php -->
@extends('layouts.app')
@section('title', 'venuetype - create new')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create venuetype</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ url('venuetype/postCreate') }}" method="post"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="card-body">

                            <div class="form-group">
                                <label for="txt- id">venuetype Id</label>
                                <input type="text" class="formcontrol" id="txt- id" name=" id"
                                    placeholder="Input venuetype id">
                            </div>

                            <div class="form-group">
                                <label for="txt-name">venuetype  name</label>
                                <input type="text" class="formcontrol" id="txt-name" name="name"
                                    placeholder="Input venuetype name">
                            </div>

                            <div class="form-group">
                                <label for="txt-category">venuetype  category</label>
                                <input type="text" class="formcontrol" id="txt-category" name="category"
                                    placeholder="Input venuetype category">
                            </div>

                            <div class="form-group">
                                <label for="txt-category">venuetype master</label>
                                <input type="text" class="formcontrol" id="txt-master" name="master"
                                    placeholder="Input venuetype master">
                            </div>

                            <div class="form-group">
                                <label for="picture">venuetype  Picture</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-fileinput" id="picture" name="picture">
                                        <label class="custom-filelabel" for="picture">Choose Picture</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>venuetype specification</label>
                                <textarea class="formcontrol" rows="5" name="specification"
                                    placeholder="Enter ..."></textarea>
                            </div>

                            <div class="form-group">
                                <label for="clientinput_id">clientinput_id</label>
                                <select required name="clientinput_id" id="clientinput_id" style="color:grey">
                                    <optgroup label="clientinput_id" style="color:black;">
                                        @if ($clientinput != null)
                                        @foreach ($clientinput as $clientin)
                                        <option value="{{$clientin->id}}">{{$clientin->id}}</option>
                                        @endforeach
                                        @endif
                                    </optgroup>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="control_id">control_id</label>
                                <select required name="control_id" id="control_id" style="color:grey;">
                                    <optgroup label="control_id" style="color:black;">
                                        @if ($control != null)
                                        @foreach ($control as $contr)
                                        <option value="{{$contr->id}}">{{$contr->id}}</option>
                                        @endforeach
                                        @endif
                                    </optgroup>
                                </select>
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