@extends('layout.master')
@section('judul')
view Cast
@endsection
@section('content')

<a href="/cast/create" class="btn btn-primary mb-3">Create Cast</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">Nama</th>
        <th scope="col">Umur</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($cast as $key => $item)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->umur}}</td>
                <td>
                   
                    <form action="/cast/{{$item->id}}" method="post">
                      <a href="/cast/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                      <a href="/cast/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                      @csrf
                    @method('delete')
                    <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                    </form>
                </td>
            </tr>
        @empty
            <h1>Data Tidak Ada!</h1>
        @endforelse
    </tbody>
  </table>
@endsection