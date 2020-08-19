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
                    <a href="{{ url('Pro') }}">Product</a><br>
                    <a href="{{ url('Pcs') }}">Purchasing</a><br>
                    <a href="{{ url('Pts') }}">PurchasingTypeSet</a><br>
                    </i></B>
                </div>
                <!--  form  -->
                <div class="col-sm-7 panel-info" style="float:left;">
                    <div class="panel-heading btn btn-info ">Create New PurchasingType</div>
                    <div class="panel-body">
                        <!-- form start -->
                        <div class="container-lg">
                            <form role="form" action="{{ url('purchasingtype/postCreate') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <!--start card-body -->
                                <div class="jumbotron btn-info alert-info">
                                    <div class="form-group">
                                        <label for="vd-id">Id</label>

                                        <input type="text" class="form-control" id="vd-id" name="id" placeholder="AutoIncreament" readonly>

                                    </div>

                                    <div class="form-group">

                                        <label for="vd-name">Name</label>

                                        <input title="ít nhất 2 kí tự" required type="text" class="form-control" id="vd-name" name="name" placeholder="Input PurchasingType Name" pattern="[a-zA-Z_0-9\-. ]{2,36}">

                                    </div>

                                    <div class="form-group">

                                        <label for="category">Category</label>

                                        <input title="ít nhất 2 kí tự" required type="text" class="form-control" id="category" name="category" placeholder="Input Category Name" pattern="[a-zA-Z_0-9 ]{2,36}">

                                    </div>

                                    <div class="form-group">

                                        <label for="master">Master</label>

                                        <input type="number" class="form-control" id="master" name="master">

                                    </div>

                                    <div class="form-group">
                                        <label for="specification">Specification</label>
                                        <textarea required class="form-control" rows="3" id="specification" name="specification" placeholder="Enter ..."></textarea>
                                    </div>

                                    <div class="form-group">

                                        <label for="clientinput_id">Clientinput_id</label>
                                        <select required name="clientinput_id" id="clientinput_id" style="color:grey;">
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
                                        <label for="image">Picture</label>
                                        <div class="input-group">
                                            <div class="custom-file">

                                                <input type="file" placeholder="Choose Image" class="custom-file-input" accept="image/*" id="image" name="image">

                                                <label class="custom-file-label" for="image">Image....</label><br>
                                                <h4 class="panel" style="color: red;">{{session()->get('loipct')}}</h4>
                                            </div>
                                        </div>
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
                <!-- table  -->
                <div class="col-xl-12 col-sm-12 panel-info" style="float:left;">
                    <div class="panel-heading btn-info " id="N5">Table PurchasingType</div>
                    <div class="panel-body">

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">PurchasingType</h3>
                            </div>
                            <!-- /.card-header table-->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Master</th>
                                            <th>Specification</th>
                                            <th>Clientinput_id</th>
                                            <th>Control_id</th>
                                            <th>Picture</th>
                                            <th>Function</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @if ($purtype != null)
                                        @foreach ($purtype as $pct)
                                        <tr>
                                            <td>{{$pct->id}}</td>
                                            <td>{{$pct->name}}</td>
                                            <td>{{$pct->category}}</td>
                                            <td>{{$pct->master}}</td>
                                            <td>{{$pct->specification}}</td>
                                            <td>{{$pct->clientinput_id}}</td>
                                            <td>{{$pct->control_id}}</td>
                                            <td style="width:15%;"><img src="images/pro/{{$pct->picture}}" alt="PurchasingType" width="100%"></td>
                                            <td style="text-align: center">
                                                <a href="images/pro/{{$pct->picture}}" class="btn btn-primary">View</a>
                                                <a href="{{ url('purchasingtype/update/'.$pct->id) }}" class="btn btn-info">Edit</a>
                                                <a href="{{ url('purchasingtype/delete/'.$pct->id) }}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <td>Id</td>
                                            <td>Name</td>
                                            <td>Category</td>
                                            <td>Master</td>
                                            <td>Specification</td>
                                            <td>Clientinput_id</td>
                                            <td>Control_id</td>
                                            <td>Picture</td>
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
