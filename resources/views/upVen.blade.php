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
            <li class="active"><a data-toggle="tab" href="#menu5">Vendor</a></li>
        </ul>

        <div class="tab-content">
            <div id="menu5" class="tab-pane fade in active">
<!--playout vendor-->
                <div class="row panel panel-group">
                    <div class="col-sm-2" style="float:left;"></div>

                    <div class="col-xl-12 col-sm-8 panel-info" style="float:left;">
                        <div class="panel-heading btn-info ">Update</div>
                        <div class="panel-body">
                            <!-- form start -->

                            <div class="jumbotron-fluid btn-info alert-info">
                                <form role="form" action="{{ url('vendor/postUpdate/'.$v->id) }}" method="post" enctype="multipart/form-data">

                                    {{ csrf_field() }}
                                    <div class="jumbotron btn-info alert-info">
                                        <div class="form-group">
                                            <label for="vd-id">Id</label>

                                            <input type="text" class="form-control" id="vd-id" name="id" value="{{$v->id}}" readonly>
                                        </div>

                                        <div class="form-group">

                                            <label for="vd-name">Name</label>

                                            <input required type="text" class="form-control" id="vd-name" name="name" value="{{$v->name}}">
                                        </div>
                                        <div class="form-group">
                                            {{-- <label for="vdable-id">Vendorable-Id</label>

                                            <input type="number" class="form-control" id="vdable-id" name="vendorable_id" placeholder="Input Vendorable Id" value="{{$v->vendorable_id}}"> --}}

                                            <label for="vdable-id">Vendorable_Id</label>
                                            <select required name="vendorable_id" id="vdable-id" style="color:grey;">
                                                <optgroup label="The Old Choice">
                                                    <option value="{{$v->vendorable_id}}" selected>{{$v->vendorable_id}}</option>
                                                </optgroup>
                                                <optgroup label="Vendor Person" style="color:black;">
                                                    @if ($person != null)
                                                    @foreach ($person as $per)
                                                    <option value="{{$per->id}}">{{$per->id}}</option>
                                                    @endforeach
                                                    @endif
                                                </optgroup>
                                                <optgroup label="Vendor Company" style="color:black;">
                                                    @if ($company != null)
                                                    @foreach ($company as $com)
                                                    <option value="{{$com->id}}">{{$com->id}}</option>
                                                    @endforeach
                                                    @endif
                                                </optgroup>
                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <label for="vdable-type">Vendorable_type</label>
                                            <select required name="vendorable_type" id="vdable-type" style="color:grey;">
                                                <option value="App\Person">App\Person</option>
                                                <option value="App\Company">App\Company</option>
                                            </select>

                                        </div>

                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea required class="form-control" rows="3" name="description" placeholder="Enter ...">{{$v->description}}</textarea>
                                        </div>

                                        <div class="form-group">

                                            <label for="image">Image</label>

                                            <img class="img-fluid" alt="Choose Id To View" src="{{ url('images/logo/'.$v->picture) }}" />
                                            <!--.$p->image-->

                                            <div class="input-group">
                                                <div class="custom-file">

                                                    <input type="file" class="custom-file-input" id="image" name="image">

                                                    <label class="custom-file-label" for="image">Choose Image</label>
                                                    <h4 class="panel" style="color: red;">{{session()->get('error')}}</h4>

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
