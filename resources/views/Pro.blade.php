@extends('layouts.app')

@section('content')
<div class="container">
<!--            For Table         -->
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Theme style -->
    <!-- <link rel="stylesheet" href="dist/css/adminlte.min.css"> -->
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>


    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

        <!-- page script -->
        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "autoWidth": false,
                });
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>
<!--            For Table         -->
    <div class="row justify-content-center">
        <div class="col-xl-12 col-sm-12">
            <div class="panel panel-group">
                <div class="col-sm-2 btn btn-dark" style="float:left;text-decoration:overline;">
                    <B style="text-decoration:none"><i>(^v^)<br>
                    <a href="{{ url('Ven') }}">Vendor</a><br>
                    <a href="{{ url('Pcs') }}">Purchasing</a><br>
                    <a href="{{ url('Pct') }}">PurchasingType</a><br>
                    <a href="{{ url('Pts') }}">PurchasingTypeSet</a><br>
                    </i></B>
                </div>
                <!--  form  -->
                <div class="col-sm-7 panel-info" style="float:left;">
                    <div class="panel-heading btn btn-info ">Create New Product</div>
                    <div class="panel-body">
                        <!-- form start -->
                        <div class="container-lg">
                            <form role="form" action="{{ url('product/postCreate') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <!--start card-body -->
                                <div class="jumbotron btn-info alert-info">
                                    <div class="form-group">
                                        <label for="pro-id">Id</label>

                                        <input type="text" class="form-control" id="pro-id" name="id" placeholder="AutoIncreament" readonly>

                                    </div>

                                    <div class="form-group">

                                        <label for="vendor_id">Vendor_Id</label>
                                        <select required name="vendor_id" id="vendor_id" style="color:grey;">
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

                                        <label for="purchasingtype_id">Vendorable_type</label>
                                        <select required name="purchasingtype_id" id="purchasingtype_id" style="color:grey;">

                                            @if ($purtype != null)
                                            @foreach ($purtype as $pcst)
                                            <option value="{{$pcst->id}}">{{$pcst->id}}</option>
                                            @endforeach
                                            @endif

                                        </select>
                                    </div>

                                    <div class="form-group">

                                        <label for="pro-name">Name</label>

                                        <input title="ít nhất 2 kí tự" required type="text" class="form-control" id="pro-name" name="name" placeholder="Input Product Name" pattern="[a-zA-Z_0-9\-. ]{2,36}">

                                    </div>

                                    <div class="form-group">
                                        <label for="specification">Specification</label>
                                        <textarea required class="form-control" rows="3" id="specification" name="specification" placeholder="Enter ..."></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input required type="number" name="price" id="price" style="color: grey">
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Picture</label>
                                        <div class="input-group">
                                            <div class="custom-file">

                                                <input type="file" class="custom-file-input" accept="image/*" id="image" name="image">

                                                <label class="custom-file-label" for="image">Choose Image</label><br>
                                                <h4 class="panel" style="color: red;">{{session()->get('loipro')}}</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="expireddate">expireddate</label>
                                        <input required type="date" name="expireddate" id="expireddate" style="color:grey">
                                    </div>

                                    <div class="form-group">

                                        <label for="control_id">control_id</label>
                                        <select required name="control_id" id="control_id" style="color:grey;">
                                            <optgroup label="control_id" style="color:black;">
                                                @if ($control != null)
                                                @foreach ($control as $con)
                                                <option value="{{$con->id}}">{{$con->id}}</option>
                                                @endforeach
                                                @endif
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>

                                <!-- end card-body submit -->
                                <div class="btn-info alert-info" style="padding:10px;">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <!--  table  -->
                <div class="col-xl-12 col-sm-12 panel-info" style="float:left;">
                    <div class="panel-heading btn-info ">Table Product</div>
                    <div class="panel-body">
                        <!--table Product-->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Product</h3>
                            </div>
                            <!-- /.card-header table-->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Vendor_id</th>
                                            <th>Purchasingtype_id</th>
                                            <th>Name</th>
                                            <th>Specification</th>
                                            <th>Price</th>
                                            <th>Picture</th>
                                            <th>Expireddate</th>
                                            <th>Control_id</th>
                                            <th>Function</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @if ($product != null)
                                        @foreach ($product as $pro)
                                        <tr>
                                            <td>{{$pro->id}}</td>
                                            <td>{{$pro->vendor_id}}</td>
                                            <td>{{$pro->purchasingtype_id}}</td>
                                            <td>{{$pro->name}}</td>
                                            <td>{{$pro->specification}}</td>
                                            <td>{{$pro->price}}</td>
                                            <td style="width:12.5%;"><img src="images/pro/{{$pro->picture}}" alt="product" width="100%"></td>
                                            <td>{{$pro->expireddate}}</td>
                                            <td>{{$pro->control_id}}</td>

                                            <td style="text-align:center;">
                                                <a href="images/pro/{{$pro->picture}}" class="btn btn-primary">View</a>
                                                <a href="{{ url('product/update/'.$pro->id) }}" class="btn btn-info">Edit</a>
                                                <a href="{{ url('product/delete/'.$pro->id) }}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <td>Id</td>
                                            <td>Vendor_id</td>
                                            <td>Purchasingtype_id</td>
                                            <td>Name</td>
                                            <td>Specification</td>
                                            <td>Price</td>
                                            <td>Picture</td>
                                            <td>Expireddate</td>
                                            <td>Control_id</td>
                                            <td>Function</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body table-->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
