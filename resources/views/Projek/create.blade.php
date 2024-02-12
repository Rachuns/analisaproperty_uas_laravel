@extends('Admin.main')
@section('content-adm')
<div class="container-fluid">
<h1 class="mt-4">Tambah Data Projek</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Tambah Data Projek</li>
    </ol>
                        
<div class="card mb-4">
    <div class="card-header"><i class="fas fa-edit mr-1"></i>Data Projek</div>
    <div class="card-body">

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('projek.store')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Nomor Pesan</label>
                <input type="text" name="nmr_pesan" class="form-control" placeholder="Nomor Pesan">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label>Judul Projek</label>
                <input type="text" name="jdl_project" class="form-control" placeholder="Judul Projek">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label>Fitur</label>
                <input type="text" name="fitur" class="form-control" placeholder="Fitur">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label>Denah Rumah</label>
                <input type="file" name="dnh_rmh" class="form-control" placeholder="Denah Rumah">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label>Denah Projek</label>
                <input type="file" name="dnh_prjct" class="form-control" placeholder="Denah Projek">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label>Status</label>
                <input type="text" name="stat" class="form-control" placeholder="Status">
            </div>
        </div>
        <div class="col-md-12 text-center mt-3">
        <button type="submit" class="btn btn-success">Submit</button> 
        <a class="btn btn-primary" href="{{ route('projek.index') }}"> Back</a>
        </div>
    </div>
</form>
</div>
@endsection