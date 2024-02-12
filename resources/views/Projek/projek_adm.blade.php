@extends('Admin.main')
@section('content-adm')
<div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data Projek</h4>
                    </div>
                </div>
            </div>
<div class="card mb-4">
    <div class="card-body">
        <div class="table-responsive">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <a class="btn btn-success" href="{{route('projek.create')}}">Tambah Data Projek</a><p></p>
        <a class="btn btn-primary" href="/report" target"_blank"><i class ="fas fa-print"></i>Cetak Data</a>
        </div>
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr align="center">
                    <th>No.</th>
                    <th>Nomor Pesan</th>
                    <th>Judul Projek</th>
                    <th>Fitur</th>
                    <th>Denah Rumah</th>
                    <th>Denah Projek</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($projeks as $projek)
                    <td>{{ ++$i }}</td>
                    <td>{{ $projek->nmr_pesan }}</td>
                    <td>{{ $projek->jdl_project }}</td>
                    <td>{{ $projek->fitur }}</td>
                    <td><center><img width="150px" align="center" src="{{ asset('/gambar/'.$projek->dnh_rmh) }}"></center></td>
                    <td><center><img width="150px" align="center" src="{{ asset('/gambar/'.$projek->dnh_prjct) }}"></center></td>
                    <td>{{ $projek->stat }}</td>
                    <td>
                    <form action="{{ route('projek.destroy',$projek->project_id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                <a class="btn btn-warning" href="{{ route('projek.edit',$projek->project_id) }}">Ubah</a>
                <button type="submit" class="btn btn-danger" onclick="javascript: return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection
