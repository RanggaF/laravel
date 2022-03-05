@extends('layout.master')
@section('judul')
Tambah Cast
@endsection
@section('content')
<form method="post" action="/cast">
    @csrf
    <div class="form-group">
      <label>Nama</label>
      <input type="text" class="form-control" placeholder="Nama" name="nama">
    </div>
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <div class="form-group">
      <label>Umur</label>
      <input type="text" class="form-control" placeholder="Umur" name="umur">
    </div>
    @error('umur')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection