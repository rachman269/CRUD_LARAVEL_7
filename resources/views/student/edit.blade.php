@extends('layout.main')
@section('title', 'Ubah Data Mahasiswa- Rachman')


@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="col-6">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Ubah Data Mahasiswa</h1>
    <form method="post" action="{{ url('/student/'.$student->id) }}">
    @method('patch')
    @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukan Nama..." value="{{ $student->nama }}">
            @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="npm">NPM</label>
            <input type="text" class="form-control @error('npm') is-invalid @enderror" id="npm" name="npm" placeholder="Masukan NPM Anda..." value="{{ $student->npm }}">
            @error('npm') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" placeholder="Masukan Jurusan Anda..." value="{{ $student->jurusan }}">
            @error('jurusan') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukan email Anda..." value="{{ $student->email }}">
            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="Masukan alamat Anda..." value="{{ $student->alamat }}">
            @error('alamat') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
        <a href="{{ url('/student') }}" class="btn btn-danger">Cancel</a>
    </form>
    </div>
</div>
<!-- /.container-fluid -->
@endsection