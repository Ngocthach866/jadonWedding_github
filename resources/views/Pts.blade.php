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
                <div class="col-sm-2 btn-dark" style="float:left;text-decoration:overline;">
                    <B style="text-decoration:none;"><i>(^v^)<br>
                    <a href="{{ url('Ven') }}">Vendor</a><br>
                    <a href="{{ url('Pro') }}">Product</a><br>
                    <a href="{{ url('Pcs') }}">Purchasing</a><br>
                    <a href="{{ url('Pct') }}">PurchasingType</a><br>
                    </i></B>
                </div>
                <!--  form  -->
                <div class="col-sm-7 panel-info" style="float:left;">
                    <div class="panel-heading btn btn-info ">Create New PurchasingTypeSet</div>
                    <div class="panel-body">
                        <!-- form start -->
                        <div class="container-lg">
                            <form role="form" action="{{ url('purchasingtypeset/postCreate') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <!--start card-body -->
                                <div class="jumbotron btn-info alert-info">
                                    <div class="form-group">
                                        <label for="vd-id">Id</label>

                                        <input type="text" class="form-control" id="vd-id" name="id" placeholder="AutoIncreament" readonly>

                                    </div>

                                    <div class="form-group">

                                        <label for="vd-name">Name</label>

                                        <input title="ít nhất 2 kí tự" required type="text" class="form-control" id="vd-name" name="name" placeholder="Input PurchasingTypeSet Name" pattern="[a-zA-Z_0-9\-. ]{2,36}">

                                    </div>

                                    <div class="form-group">

                                        <label for="purchasingtype1_id">Purchasingtype1_id</label>
                                        <select required name="purchasingtype1_id" id="purchasingtype1_id" style="color:grey;">
                                            <optgroup label="Purchasingtype1_id" style="color:black;">
                                                @if ($purtype ?? '' != null)
                                                @foreach ($purtype ?? '' as $pur)
                                                <option value="{{$pur->id}}">{{$pur->id}}</option>
                                                @endforeach
                                                @endif
                                            </optgroup>
                                        </select>

                                    </div>

                                    <div class="form-group">

                                        <label for="purchasingtype2_id">Purchasingtype2_id</label>
                                        <select required name="purchasingtype2_id" id="purchasingtype2_id" style="color:grey;">
                                            <optgroup label="Purchasingtype2_id" style="color:black;">
                                                @if ($purtype ?? '' != null)
                                                @foreach ($purtype ?? '' as $pur)
                                                <option value="{{$pur->id}}">{{$pur->id}}</option>
                                                @endforeach
                                                @endif
                                            </optgroup>
                                        </select>

                                    </div>

                                    <div class="form-group">

                                        <label for="purchasingtype3_id">Purchasingtype3_id</label>
                                        <select required name="purchasingtype3_id" id="purchasingtype3_id" style="color:grey;">
                                            <optgroup label="Purchasingtype3_id" style="color:black;">
                                                @if ($purtype ?? '' != null)
                                                @foreach ($purtype ?? '' as $pur)
                                                <option value="{{$pur->id}}">{{$pur->id}}</option>
                                                @endforeach
                                                @endif
                                            </optgroup>
                                        </select>

                                    </div>

                                    <div class="form-group">

                                        <label for="purchasingtype4_id">Purchasingtype4_id</label>
                                        <select required name="purchasingtype4_id" id="purchasingtype4_id" style="color:grey;">
                                            <optgroup label="Purchasingtype4_id" style="color:black;">
                                                @if ($purtype ?? '' != null)
                                                @foreach ($purtype ?? '' as $pur)
                                                <option value="{{$pur->id}}">{{$pur->id}}</option>
                                                @endforeach
                                                @endif
                                            </optgroup>
                                        </select>

                                    </div>

                                    <div class="form-group">

                                        <label for="purchasingtype5_id">Purchasingtype5_id</label>
                                        <select required name="purchasingtype5_id" id="purchasingtype5_id" style="color:grey;">
                                            <optgroup label="Purchasingtype5_id" style="color:black;">
                                                @if ($purtype ?? '' != null)
                                                @foreach ($purtype ?? '' as $pur)
                                                <option value="{{$pur->id}}">{{$pur->id}}</option>
                                                @endforeach
                                                @endif
                                            </optgroup>
                                        </select>

                                    </div>

                                    <div class="form-group">
                                        <label for="master">Master</label>
                                        <input type="number" name="master" id="master" style="color:grey">
                                    </div>

                                    <div class="form-group">

                                        <label for="clientinput_id">Clientinput_id</label>
                                        <select required name="clientinput_id" id="clientinput_id" style="color:grey;">
                                            @if ($clientinput !=null)
                                            @foreach ($clientinput as $client)
                                            <option value="{{$client->id}}">{{$client->id}}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                    </div>

                                    <div class="form-group">

                                        <label for="control_id">Control_id</label>
                                        <select required name="control_id" id="control_id" style="color:grey;">
                                            @if ($control !=null)
                                            @foreach ($control as $con)
                                            <option value="{{$con->id}}">{{$con->id}}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Picture</label>
                                        <div class="input-group">
                                            <div class="custom-file">

                                                <input type="file" class="custom-file-input" accept="image/*" id="image" name="image">

                                                <label class="custom-file-label" for="image">Choose Image</label><br>
                                                <h4 class="panel" style="color: red;">{{session()->get('loipts')}}</h4>
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
                    <div class="panel-heading btn-info " id="N5">Table PurchasingTypeSet</div>
                    <div class="panel-body">

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">PurchasingTypeSet</h3>
                            </div>
                            <!-- /.card-header table-->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>PCST1_id</th>
                                            <th>PCST2_id</th>
                                            <th>PCST3_id</th>
                                            <th>PCST4_id</th>
                                            <th>PCST5_id</th>
                                            <th>Master</th>
                                            <th>Clientinput_id</th>
                                            <th>Control_id</th>
                                            <th>Picture</th>
                                            <th>Function</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @if ($purtypeset != null)
                                        @foreach ($purtypeset as $pts)
                                        <tr>
                                            <td>{{$pts->id}}</td>
                                            <td>{{$pts->name}}</td>
                                            <td>{{$pts->purchasingtype1_id}}</td>
                                            <td>{{$pts->purchasingtype2_id}}</td>
                                            <td>{{$pts->purchasingtype3_id}}</td>
                                            <td>{{$pts->purchasingtype4_id}}</td>
                                            <td>{{$pts->purchasingtype5_id}}</td>
                                            <td>{{$pts->master}}</td>
                                            <td>{{$pts->clientinput_id}}</td>
                                            <td>{{$pts->control_id}}</td>
                                            <td style="width:15%;"><img src="images/pro/{{$pts->picture}}" alt="purchasingtypeset" width="100%"></td>
                                            <td style="text-align: center">
                                                <a href="images/pro/{{$pts->picture}}" class="btn btn-primary">View</a>
                                                <a href="{{ url('purchasingtypeset/update/'.$pts->id) }}" class="btn btn-info">Edit</a>
                                                <a href="{{ url('purchasingtypeset/delete/'.$pts->id) }}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <td>Id</td>
                                            <td>Name</td>
                                            <td>PCST1_id</td>
                                            <td>PCST2_id</td>
                                            <td>PCST3_id</td>
                                            <td>PCST4_id</td>
                                            <td>PCST5_id</td>
                                            <td>Master</td>
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
