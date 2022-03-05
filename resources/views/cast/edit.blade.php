@extends('layout.master')
@section('judul')
Edit Cast
@endsection
@section('content')
<form method="POST" action="/cast/{{$cast->id}}">
    @csrf
    @method ('PUT')
    <div class="form-group">
      <label>Nama</label>
      <input type="text" class="form-control" placeholder="Nama" name="nama" value="{{$cast->nama}}">
    </div>
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <div class="form-group">
      <label>Umur</label>
      <input type="text" class="form-control" placeholder="Umur" name="umur" value="{{$cast->umur}}">
    </div>
    @error('umur')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection