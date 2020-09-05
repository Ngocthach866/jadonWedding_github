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
                        <h3 class="card-title">Create Venue</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ url('venue/postCreate') }}" method="post"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="card-body">

                            <div class="form-group">
                                <label for="id">Venue ID</label>
                                <input type="text" class="formcontrol" id="id" name="id" placeholder=" Venue id"
                                    readonly>
                            </div>

                            <div class="form-group">
                                <label for="project_id">Project ID</label>
                                <select required name="project_id" id="project_id" style="color:grey;">
                                    <!-- <optgroup label="The Old Choice">
                                                    @if ($venues != null)
                                                    @foreach ($venues as $ven)
                                                    <option value="{{$ven->id}}" selected>{{$ven->id}}</option>
                                                    @endforeach
                                                    @endif
                                                </optgroup> -->
                                    <optgroup label="Project_id" style="color:black;">
                                        @if ($project != null)
                                        @foreach ($project as $pro)
                                        <option value="{{$pro->id}}">{{$pro->id}}</option>
                                        @endforeach
                                        @endif
                                    </optgroup>
                                </select>
                            </div>

                            <div class="form-group">

                                <label for="client_id">client_id</label>
                                <select required name="client_id" id="client_id" style="color:grey;">
                                    <optgroup label="client_id" style="color:black;">
                                        @if ($client != null)
                                        @foreach ($client as $clien)
                                        <option value="{{$clien->id}}">{{$clien->id}}</option>
                                        @endforeach
                                        @endif
                                    </optgroup>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="requirement_id">requirement_id</label>
                                <select required name="requirement_id" id="requirement_id" style="color:grey;">
                                    <optgroup label="requirement_id" style="color:black;">
                                        @if ($requirement != null)
                                        @foreach ($requirement as $requir)
                                        <option value="{{$requir->id}}">{{$requir->id}}</option>
                                        @endforeach
                                        @endif
                                    </optgroup>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="venuetype_id">venuetype_id</label>
                                <select required name="venuetype_id" id="venuetype_id" style="color:grey;">
                                    <optgroup label="venuetype_id" style="color:black;">
                                        @if ($requirement != null)
                                        @foreach ($requirement as $venu)
                                        <option value="{{$venu->id}}">{{$venu->id}}</option>
                                        @endforeach
                                        @endif
                                    </optgroup>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="location_id">location_id</label>
                                <select required name="location_id" id="location_id" style="color:grey;">
                                    <optgroup label="location_id" style="color:black;">
                                        @if ($location != null)
                                        @foreach ($location as $local)
                                        <option value="{{$local->id}}">{{$local->id}}</option>
                                        @endforeach
                                        @endif
                                    </optgroup>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="picture">Venue picture</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-fileinput" id="picture" name="picture">
                                        <label class="custom-filelabel" for="picture">Choose Picture</label>
                                    </div>
                                </div>
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

                            <div class="form-group">
                                <label for="program_id">program_id</label>
                                <select required name="program_id" id="program_id" style="color:grey;">
                                    <optgroup label="program_id" style="color:black;">
                                        @if ($program != null)
                                        @foreach ($program as $progr)
                                        <option value="{{$progr->id}}">{{$progr->id}}</option>
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