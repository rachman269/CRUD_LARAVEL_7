@extends('layout.main')
@section('title', 'Detail Mahasiswa - Rachman')


@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

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

</div>
<!-- /.container-fluid -->
@endsection