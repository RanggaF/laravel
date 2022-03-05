@extends('layout.master')
@section('judul')
Detail Cast
@endsection
@section('content')

<h1>{{$cast->nama}}</h1>
<p>{{$cast->umur}}</p>
@endsection