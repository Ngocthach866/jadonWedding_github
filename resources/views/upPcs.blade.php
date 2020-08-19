<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JaDon</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <h2 class="btn-primary font-weight-bolder">JaDon</h2>
        <p></p>

        <ul class="nav nav-tabs btn-primary alert-info ">
            <li class="active"><a data-toggle="tab" href="#menu3">Purchasing</a></li>
        </ul>

        <div class="tab-content">

            <div id="menu3" class="tab-pane fade in active">
<!--playout Product-->
                <div class="row panel panel-group">
                    <div class="col-sm-2" style="float:left;"></div>

                    <div class="col-xl-12 col-sm-8 panel-info" style="float:left;">
                        <div class="panel-heading btn-info ">Update</div>
                        <div class="panel-body">
<!-- form start -->

                            <div class="jumbotron-fluid btn-info alert-info">
                                <form role="form" action="{{ url('purchasing/postUpdate/'.$pcs->id) }}" method="post" enctype="multipart/form-data">

                                    {{ csrf_field() }}
                                    <div class="jumbotron btn-info alert-info">
                                        <div class="form-group">
                                            <label for="vd-id">Id</label>

                                            <input type="text" class="form-control" id="vd-id" name="id" value="{{$pcs->id}}" readonly>
                                        </div>


                                        <div class="form-group">

                                            <label for="project_id">Project_id</label>
                                            <select required name="project_id" id="project_id" style="color:grey;">
                                                <optgroup label="The Old Choice">
                                                    <option value="{{$pcs->project_id}}" selected>{{$pcs->project_id}}</option>
                                                </optgroup>
                                                <optgroup label="Project_id" style="color:black;">
                                                    @if ($project != null)
                                                    @foreach ($project as $proj)
                                                    <option value="{{$proj->id}}">{{$proj->id}}</option>
                                                    @endforeach
                                                    @endif
                                                </optgroup>
                                            </select>

                                        </div>
                                        <div class="form-group">

                                            <label for="client_id">Client_id</label>
                                            <select required name="client_id" id="client_id" style="color:grey;">
                                                <optgroup label="The Old Choice">
                                                    <option value="{{$pcs->client_id}}" selected>{{$pcs->client_id}}</option>
                                                </optgroup>
                                                <optgroup label="Client_id" style="color:black;">
                                                    @if ($client != null)
                                                    @foreach ($client as $cli)
                                                    <option value="{{$cli->id}}">{{$cli->id}}</option>
                                                    @endforeach
                                                    @endif
                                                </optgroup>
                                            </select>

                                        </div>

                                        <div class="form-group">

                                            <label for="requirement_id">Requirement_id</label>
                                            <select required name="requirement_id" id="requirement_id" style="color:grey;">
                                                <optgroup label="The Old Choice">
                                                    <option value="{{$pcs->requirement_id}}" selected>{{$pcs->requirement_id}}</option>
                                                </optgroup>
                                                <optgroup label="Requirement_id" style="color:black;">
                                                    @if ($requirement != null)
                                                    @foreach ($requirement as $requi)
                                                    <option value="{{$requi->id}}">{{$requi->id}}</option>
                                                    @endforeach
                                                    @endif
                                                </optgroup>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="purchasingtype_id">Purchasingtype_id</label>
                                            <select required name="purchasingtype_id" id="purchasingtype_id" style="color:grey;">
                                                <optgroup label="The Old Choice">
                                                    <option value="{{$pcs->purchasingtype_id}}" selected>{{$pcs->purchasingtype_id}}</option>
                                                </optgroup>
                                                <optgroup label="Purchasingtype_id" style="color:black;">
                                                    @if ($purtype != null)
                                                    @foreach ($purtype as $purt)
                                                    <option value="{{$purt->id}}">{{$purt->id}}</option>
                                                    @endforeach
                                                    @endif
                                                </optgroup>
                                            </select>
                                        </div>

                                        <div class="form-group">

                                            <label for="product_id">Product_id</label>
                                            <select required name="product_id" id="product_id" style="color:grey;">
                                                <optgroup label="The Old Choice">
                                                    <option value="{{$pcs->product_id}}" selected>{{$pcs->product_id}}</option>
                                                </optgroup>
                                                <optgroup label="Product_id" style="color:black;">
                                                    @if ($product != null)
                                                    @foreach ($product as $pro)
                                                    <option value="{{$pro->id}}">{{$pro->id}}</option>
                                                    @endforeach
                                                    @endif
                                                </optgroup>
                                            </select>
                                        </div>

                                        <div class="form-group">

                                            <label for="clientinput_id">Clientinput_id</label>
                                            <select required name="clientinput_id" id="clientinput_id" style="color:grey;">
                                                <optgroup label="The Old Choice">
                                                    <option value="{{$pcs->clientinput_id}}" selected>{{$pcs->clientinput_id}}</option>
                                                </optgroup>
                                                <optgroup label="Clientinput_id" style="color:black;">
                                                    @if ($clientinput != null)
                                                    @foreach ($clientinput as $clip)
                                                    <option value="{{$clip->id}}">{{$clip->id}}</option>
                                                    @endforeach
                                                    @endif
                                                </optgroup>
                                            </select>
                                        </div>

                                        <div class="form-group">

                                            <label for="Control_id">Control_id</label>
                                            <select required name="control_id" id="Control_id" style="color:grey;">
                                                <optgroup label="The Old Choice">
                                                    <option value="{{$pcs->control_id}}" selected>{{$pcs->control_id}}</option>
                                                </optgroup>
                                                <optgroup label="Control_id" style="color:black;">
                                                    @if ($control != null)
                                                    @foreach ($control as $con)
                                                    <option value="{{$con->id}}">{{$con->id}}</option>
                                                    @endforeach
                                                    @endif
                                                </optgroup>
                                            </select>

                                        </div>

                                        <div class="form-group">

                                            <label for="program_id">Program_id</label>
                                            <select required name="program_id" id="program_id" style="color:grey;">
                                                <optgroup label="The Old Choice">
                                                    <option value="{{$pcs->program_id}}" selected>{{$pcs->program_id}}</option>
                                                </optgroup>
                                                <optgroup label="Program_id" style="color:black;">
                                                    @if ($program != null)
                                                    @foreach ($program as $prog)
                                                    <option value="{{$prog->id}}">{{$prog->id}}</option>
                                                    @endforeach
                                                    @endif
                                                </optgroup>
                                            </select>

                                        </div>

                                        <div class="form-group">

                                            <label for="image">Image</label>

                                            <img class="img-fluid" alt="Choose Id To View" src="{{ url('images/pro/'.$pcs->picture) }}" /><!--width="100%" style="max-width:70%;"-->


                                            <div class="input-group">
                                                <div class="custom-file">

                                                    <input type="file" class="custom-file-input" id="image" name="image">

                                                    <label class="custom-file-label" for="image">Choose Image</label>
                                                    <h4 class="panel" style="color: red;">{{session()->get('loipcs')}}</h4>

                                                </div>
                                            </div>
                                        </div>


                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </div>


                                </form>
                            </div>

                        </div>
                    </div>


                </div>
            </div>


        </div>
    </div>

</body>

</html>
