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
            <li class="active"><a data-toggle="tab" href="#menu2">PurchasingType</a></li>
        </ul>

        <div class="tab-content">
            <div id="menu2" class="tab-pane fade in active">
<!--playout vendor-->
                <div class="row panel panel-group">
                    <div class="col-sm-2" style="float:left;"></div>

                    <div class="col-xl-12 col-sm-8 panel-info" style="float:left;">
                        <div class="panel-heading btn-info ">Update</div>
                        <div class="panel-body">
                            <!-- form start -->

                            <div class="jumbotron-fluid btn-info alert-info">
                                <form role="form" action="{{ url('purchasingtype/postUpdate/'.$pct->id) }}" method="post" enctype="multipart/form-data">

                                    {{ csrf_field() }}
                                    <div class="jumbotron btn-info alert-info">
                                        <div class="form-group">
                                            <label for="vd-id">Id</label>

                                            <input type="text" class="form-control" id="vd-id" name="id" value="{{$pct->id}}" readonly>
                                        </div>

                                        <div class="form-group">

                                            <label for="vd-name">Name</label>

                                            <input required type="text" class="form-control" id="vd-name" name="name" value="{{$pct->name}}">
                                        </div>

                                        <div class="form-group">

                                            <label for="category">Category</label>

                                            <input required type="text" class="form-control" id="category" name="category" value="{{$pct->category}}">
                                        </div>

                                        <div class="form-group">

                                            <label for="master">Master</label>

                                            <input type="number" class="form-control" id="master" name="master" value="{{$pct->master}}">
                                        </div>

                                        <div class="form-group">
                                            <label>Specification</label>
                                            <textarea required class="form-control" rows="3" name="specification" placeholder="Enter ...">{{$pct->specification}}</textarea>
                                        </div>

                                        <div class="form-group">

                                            <label for="clientinput_id">Clientinput_id</label>
                                            <select required name="clientinput_id" id="clientinput_id" style="color:grey;">
                                                <optgroup label="The Old Choice">
                                                    <option value="{{$pct->clientinput_id}}" selected>{{$pct->clientinput_id}}</option>
                                                </optgroup>
                                                <optgroup label="Clientinput_id" style="color:black;">
                                                    @if ($clientinput != null)
                                                    @foreach ($clientinput as $client)
                                                    <option value="{{$client->id}}">{{$client->id}}</option>
                                                    @endforeach
                                                    @endif
                                                </optgroup>
                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <label for="control_id">Control_id</label>
                                            <select required name="control_id" id="control_id" style="color:grey;">
                                                <optgroup label="The Old Choice">
                                                    <option value="{{$pct->control_id}}" selected>{{$pct->control_id}}</option>
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

                                            <label for="image">Image</label>

                                            <img class="img-fluid" alt="Choose Id To View" src="{{ url('images/pro/'.$pct->picture) }}" />
                                            <!--.$p->image-->

                                            <div class="input-group">
                                                <div class="custom-file">

                                                    <input type="file" class="custom-file-input" id="image" name="image">

                                                    <label class="custom-file-label" for="image">Choose Image</label>
                                                    <h4 class="panel" style="color: red;">{{session()->get('loipct')}}</h4>

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
