@extends('layouts.master')
@section('judul', 'halaman Pengguna')
@section('judulhalaman', 'Halaman Pengguna')
@section('tabelsuhu')

@if ($message = Session::get('sukses'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong style="font-size: 14px">{{ $message }}</strong>
      </div>
      @endif

      <div class="table-responsive">
        <table class="table table-sm0 table-bordered table-hover">
          <thead>
            <h4 class="pl-1 pt-3 text-primary">Daftar Pengguna</h4>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>

   <?php $n=1; ?>
    @foreach($user as $p)
    <tr>
      <th scope="row">{{$n++}}</th>
      <td>{{$p->name}}</td>
      <td>{{$p->email}}</td>
      <td>{{$p->password}}</td>

  <td>
 
    <form action="{{route('delete',$p->id)}}" method="post">
    @csrf
    @method('DELETE')
    <a href="/edit/{{$p->id}}" class="btn btn-warning btn-sm">Edit</a>
    <Button type="submit" class="btn btn-danger btn-sm">Hapus</button>
    </form>
</td>

    </tr>
    <! @endForeach >

  </tbody>
</table>

@endsection