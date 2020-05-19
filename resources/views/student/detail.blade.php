@extends('layout.main')
@section('title', 'Detail Mahasiswa - Rachman')


@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
<div class="col-8">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Detail Mahasiswa</h1>

<ul class="list-group">
  <li class="list-group-item active">Detail Mahasiswa</li>

  <li class="list-group-item">Nama : &nbsp; {{ $student->nama }}</li>
  <li class="list-group-item">NPM : &nbsp; {{ $student->npm }}</li>
  <li class="list-group-item">Jurusan : &nbsp; {{ $student->jurusan }}</li>
  <li class="list-group-item">E-Mail : &nbsp; {{ $student->email }}</li>
  <li class="list-group-item">Alamat : &nbsp; {{ $student->alamat }}</li>
</ul>
<a href="{{ url('/student/' . $student->id . '/edit') }}" class="btn btn-primary my-2">Edit</a>
<form action="{{ $student->id }}" method="post" class="d-inline">
  <button type="submit" class="btn btn-danger my-2">Hapus</button>
  @method('delete')
  @csrf
</form>
<a href="{{ url('/student') }}" class="btn btn-success my-2">Kembali</a>

</div>
</div>
<!-- /.container-fluid -->
@endsection