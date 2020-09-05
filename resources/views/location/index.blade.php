<!-- Lưu tại resources/views/location/index.blade.php -->
@extends('layouts.app')
@section('title', 'location index')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>DataTables</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">DataTables</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="cardtitle">LOCATIONS</h3>

                    <a class="btn btn-info btnsm" href="{{ url('location/create/') }}">
                        <i class="fas fa-pencil-alt"></i> create
                    </a>
                </div>
                <!-- /.card-header -->

                <div class="card-body">
                    <table id="location" class="table table-bordered tablehover">
                        <thead>
                      
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>address</th>
                                <th>from</th>
                                <th>to</th>
                                <th>venuetype_id</th>
                                <th>price</th>
                                <th>expireddate</th>
                                <th>specification</th>
                                <th>picture</th>
                                <th>control_id</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($locations as $p)
                            <tr>
                                <td>{{ $p->id }}</td>
                                <td>{{ $p->name}}</td>
                                <td>{{ $p->address}}</td>
                                <td>{{ $p->from}}</td>
                                <td>{{ $p->to}}</td>
                                <td>{{ $p->venuetype_id}}</td>
                                <td>{{ $p->price}}</td>
                                <td>{{ $p->expireddate}}</td>
                                <td>{{ $p->specification}}</td>
                                <td>
                                    {{ $p->picture}}
                                    <br>
                                    <img width="100px" src="{{ url('picture/'.$p->picture) }}"> </td>

                                <td>{{ $p->control_id}}<br>

                                <td class="text-center">
                                    <a class="btn btn-danger btnsm" href="{{ url('location/detail/'.$p->id) }}">
                                        <i class="fas fa-folder"></i> detail </a>

                                    <a class="btn btn-danger btnsm" href="{{ url('location/update/'.$p->id) }}"> <i
                                            class="fas fa-trash"></i> Update </a>

                                    <a class="btn btn-danger btnsm" href="{{ url('location/delete/'.$p->id) }}">
                                        <i class="fas fa-trash"></i> Delete </a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>

                        <tfoot>
                            <tr>
                            <th>id</th>
                                <th>name</th>
                                <th>address</th>
                                <th>from</th>
                                <th>to</th>
                                <th>venuetype_id</th>
                                <th>price</th>
                                <th>expireddate</th>
                                <th>specification</th>
                                <th>picture</th>
                                <th>control_id</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
@endsection
@section('script-section')
<script>
$(function() {
    $('#location').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
    });
});
</script>
@endsection