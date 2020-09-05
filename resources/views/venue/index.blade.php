<!-- Lưu tại resources/views/venue/index.blade.php -->
@extends('layouts.app')
@section('title', 'venue index')
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
                    <li class="breadcrumb-item active">DataTables of venue</li>
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
                    <h3 class="cardtitle">Venue</h3>

                    <a class="btn btn-info btnsm" href="{{ url('venue/create/') }}">
                        <i class="fas fa-pencil-alt"></i> create
                    </a>
                </div>
                <!-- /.card-header -->

                <div class="card-body">
                    <table id="venue" class="table table-bordered tablehover">
                        <thead>
<!-- ['id', 'project_id', 'client_id ', 'requirement_id', 'venuetype_id', 'location_id', 'picture', 'clientinput_id', 'control_id', 'program_id', 'updated_
at', 'created_at'];-->
                            <tr>
                                <th>id</th>
                                <th>project_id</th>
                                <th>client_id </th>
                                <th>requirement_id</th>
                                <th>venuetype_id</th>
                                <th>location_id</th>
                                <th>picture</th>
                                <th>clientinput_id</th>
                                <th>control_id</th>
                                <th>program_id</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($venues as $p)
                            <tr>
                                <td>{{ $p->id}}</td>
                                <td>{{ $p->project_id}}</td>
                                <td>{{ $p->client_id}}</td>
                                <td>{{ $p->requirement_id}}</td>
                                <td>{{ $p->venuetype_id}}</td>
                                <td>{{ $p->location_id}}</td>
                                <td>{{ $p->picture}}<br>
                                    <img width="150px" src="{{ url('picture/'.$p->picture) }}" /> </td>
                                <td>{{ $p->clientinput_id}}</td>
                                <td>{{ $p->control_id}}</td>
                                <td> {{ $p->program_id}}

                                <td class="text-center">
                                    <a class="btn btn-danger btnsm" href="{{ url('venue/detail/'.$p->id) }}">
                                        <i class="fas fa-folder"></i> detail </a>

                                    <a class="btn btn-danger btnsm" href="{{ url('venue/update/'.$p->id) }}"> <i
                                            class="fas fa-trash"></i> Update </a>

                                    <a class="btn btn-danger btnsm" href="{{ url('venue/delete/'.$p->id) }}">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>

                        <tfoot>
                            <tr>
                            <th>id</th>
                                <th>project_id</th>
                                <th>client_id </th>
                                <th>requirement_id</th>
                                <th>venuetype_id</th>
                                <th>location_id</th>
                                <th>picture</th>
                                <th>clientinput_id</th>
                                <th>control_id</th>
                                <th>program_id</th>
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
    $('#venue').DataTable({
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