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
            <li class="active"><a data-toggle="tab" href="#menu4">Product</a></li>
        </ul>

        <div class="tab-content">

            <div id="menu4" class="tab-pane fade in active">
<!--playout Product-->
                <div class="row panel panel-group">
                    <div class="col-sm-2" style="float:left;"></div>

                    <div class="col-xl-12 col-sm-8 panel-info" style="float:left;">
                        <div class="panel-heading btn-info ">Update</div>
                        <div class="panel-body">
<!-- form start -->

                            <div class="jumbotron-fluid btn-info alert-info">
                                <form role="form" action="{{ url('product/postUpdate/'.$p->id) }}" method="post" enctype="multipart/form-data">

                                    {{ csrf_field() }}
                                    <div class="jumbotron btn-info alert-info">
                                        <div class="form-group">
                                            <label for="vd-id">Id</label>

                                            <input type="text" class="form-control" id="vd-id" name="id" value="{{$p->id}}" readonly>
                                        </div>


                                        <div class="form-group">

                                            <label for="vdable-id">Vendor_Id</label>
                                            <select required name="vendor_id" id="vdable-id" style="color:grey;">
                                                <optgroup label="The Old Choice">
                                                    <option value="{{$p->vendor_id}}" selected>{{$p->vendor_id}}</option>
                                                </optgroup>
                                                <optgroup label="Vendor_id" style="color:black;">
                                                    @if ($vendor != null)
                                                    @foreach ($vendor as $ven)
                                                    <option value="{{$ven->id}}">{{$ven->id}}</option>
                                                    @endforeach
                                                    @endif
                                                </optgroup>
                                            </select>

                                        </div>
                                        <div class="form-group">

                                            <label for="purchasingtype_id">Purchasingtype_id</label>
                                            <select required name="purchasingtype_id" id="purchasingtype_id" style="color:grey;">
                                                <optgroup label="The Old Choice">
                                                    <option value="{{$p->purchasingtype_id}}" selected>{{$p->purchasingtype_id}}</option>
                                                </optgroup>
                                                <optgroup label="purchasingtype_id" style="color:black;">
                                                    @if ($purchasingtype != null)
                                                    @foreach ($purchasingtype as $pcst)
                                                    <option value="{{$pcst->id}}">{{$pcst->id}}</option>
                                                    @endforeach
                                                    @endif
                                                </optgroup>
                                            </select>

                                        </div>

                                        <div class="form-group">

                                            <label for="pro-name">Name</label>

                                            <input required type="text" class="form-control" id="pro-name" name="name" value="{{$p->name}}">
                                        </div>

                                        <div class="form-group">
                                            <label>Specification</label>
                                            <textarea  class="form-control" rows="3" name="specification" placeholder="Enter ...">{{$p->specification}}</textarea>
                                        </div>

                                        <div class="form-group">

                                            <label for="pro-price">Price</label>

                                            <input required type="number" class="form-control" id="pro-price" name="price" value="{{$p->price}}">
                                        </div>

                                        <div class="form-group">

                                            <label for="Expireddate">Expireddate</label>

                                            <input required type="date" class="form-control" id="Expireddate" name="expireddate" value="{{$p->expireddate}}">
                                        </div>

                                        <div class="form-group">

                                            <label for="Control_id">Control_id</label>
                                            <select required name="control_id" id="Control_id" style="color:grey;">
                                                <optgroup label="The Old Choice">
                                                    <option value="{{$p->control_id}}" selected>{{$p->control_id}}</option>
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

                                            <img class="img-fluid" alt="Choose Id To View" src="{{ url('images/pro/'.$p->picture) }}" />
                                            <!--.$p->image-->

                                            <div class="input-group">
                                                <div class="custom-file">

                                                    <input type="file" class="custom-file-input" id="image" name="image">

                                                    <label class="custom-file-label" for="image">Choose Image</label>
                                                    <h4 class="panel" style="color: red;">{{session()->get('loipro')}}</h4>

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
