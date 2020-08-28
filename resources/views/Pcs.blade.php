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
                    <a href="{{ url('Pct') }}">PurchasingType</a><br>
                    <a href="{{ url('Pts') }}">PurchasingTypeSet</a><br>
                    </i></B>
                </div>
                <!--  form  -->
                <div class="col-sm-7 panel-info" style="float:left;">
                    <div id="show" class="panel-heading btn btn-info ">Create New Purchasing</div>
                    <div id="hide" class="panel-body" style="display:none">
                        <!-- form start -->
                        <div class="container-lg">
                            <form role="form" action="{{ url('purchasing/postCreate') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <!--start card-body -->
                                <div class="jumbotron btn-info alert-info">
                                    <div class="form-group">
                                        <label for="pro-id">Id</label>

                                        <input type="text" class="form-control" id="pro-id" name="id" placeholder="AutoIncreament" readonly>

                                    </div>

                                    <div class="form-group">

                                        <label for="project_id">Project_id</label>
                                        <select required name="project_id" id="project_id" style="color:grey;">
                                            <optgroup label="Project_Id" style="color:black;">
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
                                            @if ($Client != null)
                                            @foreach ($Client as $li)
                                            <option value="{{$li->id}}">{{$li->id}}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                    </div>

                                    <div class="form-group">

                                        <label for="requirement_id">Requirement_id</label>
                                        <select required name="requirement_id" id="requirement_id" style="color:grey;">
                                            <optgroup label="requirement_id" style="color:black;">
                                                @if ($requirement != null)
                                                @foreach ($requirement as $req)
                                                <option value="{{$req->id}}">{{$req->id}}</option>
                                                @endforeach
                                                @endif
                                            </optgroup>
                                        </select>

                                    </div>

                                    <div class="form-group">

                                        <label for="purchasingtype_id">PurchasingType_id</label>
                                        <select required name="purchasingtype_id" id="purchasingtype_id" style="color:grey;">

                                            @if ($purtype != null)
                                            @foreach ($purtype as $pcst)
                                            <option value="{{$pcst->id}}">{{$pcst->id}}</option>
                                            @endforeach
                                            @endif

                                        </select>
                                    </div>

                                    <div class="form-group">

                                        <label for="product_id">Product_id</label>
                                        <select required name="product_id" id="product_id" style="color:grey;">

                                            @if ($product != null)
                                            @foreach ($product as $prod)
                                            <option value="{{$prod->id}}">{{$prod->id}}</option>
                                            @endforeach
                                            @endif

                                        </select>
                                    </div>

                                    <div class="form-group">

                                        <label for="clientinput_id">Clientinput_id</label>
                                        <select required name="clientinput_id" id="clientinput_id" style="color:grey;">
                                            <optgroup label="clientinput_id" style="color:black;">
                                                @if ($clientinput != null)
                                                @foreach ($clientinput as $client)
                                                <option value="{{$client->id}}">{{$client->id}}</option>
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
                                        <label for="image">Picture</label>
                                        <div class="input-group">
                                            <div class="custom-file">

                                                <input type="file" class="custom-file-input" accept="image/*" id="image" name="image">

                                                <label class="custom-file-label" for="image">Choose Image</label><br>
                                                <h4 class="panel" style="color: red;">{{session()->get('loipcs')}}</h4>
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
            </div>
            <!--  table  -->
            <div class="col-xl-12 col-sm-12 panel-info" style="float:left;">
                <div class="panel-heading btn-info ">Table Purchasing</div>
                <div class="panel-body">
                    <!--table Purchasing-->
                    <div class="card container-fluid">
                        <div class="card-header">
                            <h3 class="card-title">Purchasing</h3>
                        </div>
                        <!-- /.card-header table-->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Project_id</th>
                                        <th>Client_id</th>
                                        <th>Requirement_id</th>
                                        <th>Purchasingtype_id</th>
                                        <th>Product_id</th>
                                        <th>Picture</th>
                                        <th>Clientinput_id</th>
                                        <th>Control_id</th>
                                        <th>Program_id</th>
                                        <th>Function</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @if ($purchasing != null)
                                    @foreach ($purchasing as $pur)
                                    <tr>
                                        <td>{{$pur->id}}</td>
                                        <td>{{$pur->project_id}}</td>
                                        <td>{{$pur->client_id}}</td>
                                        <td>{{$pur->requirement_id}}</td>
                                        <td>{{$pur->purchasingtype_id}}</td>
                                        <td>{{$pur->product_id}}</td>
                                        <td style="width:15%;"><img src="images/pro/{{$pur->picture}}" alt="purchasings" width="100%"></td>
                                        <td>{{$pur->clientinput_id}}</td>
                                        <td>{{$pur->control_id}}</td>
                                        <td>{{$pur->program_id}}</td>

                                        <td style="text-align:center;">
                                            <a href="images/pro/{{$pur->picture}}" class="btn btn-primary">View</a>
                                            <a href="{{ url('purchasing/update/'.$pur->id) }}" class="btn btn-info">Edit</a>
                                            <a href="{{ url('purchasing/delete/'.$pur->id) }}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <td>Id</td>
                                        <td>Project_id</td>
                                        <td>Client_id</td>
                                        <td>Requirement_id</td>
                                        <td>Purchasingtype_id</td>
                                        <td>Product_id</td>
                                        <td>Picture</td>
                                        <td>Clientinput_id</td>
                                        <td>Control_id</td>
                                        <td>Program_id</td>
                                        <td>Function</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body table-->
                    </div>
                </div>
                <script>
                    $(document).ready(function() {
                        $("#show").click(function() {
                            $("#hide").toggle();
                        });
                    });
                </script>
            </div>
        </div>
    </div>
</div>
@endsection
