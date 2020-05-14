@extends('layout.main')
@section('title', 'Daftar Mahasiswa')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Mahasiswa</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Daftar Mahasiswa</h6>
    <a href="{{ asset('/student/create')}}"></a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Jurusan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($student as $stdn)
          <tr>
            <td class="scope">{{ $loop->iteration }}</td>
            <td>{{ $stdn->nama }}</td>
            <td>{{ $stdn->npm }}</td>
            <td>{{ $stdn->jurusan }}</td>
            <td>
                <a href="/student/{{ $stdn->id }}" class="badge badge-info">Detail</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->
@endsection