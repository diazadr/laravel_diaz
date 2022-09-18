@extends('layouts.master')
@section('judul', 'halaman Biodata')
@section('judulhalaman', 'Halaman Biodata')
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
    <h4 class="pl-1 pt-3 text-primary">Biodata Pengguna</h4>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">NIS</th>
      <th scope="col">Kelas</th>
      <th scope="col">Tempat Lahir</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Email</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>

   <?php $n=1; ?>
    @foreach($bio as $p)
    <tr>
      <th scope="row">{{$n++}}</th>
      <td>{{$p->nama}}</td>
      <td>{{$p->nis}}</td>
      <td>{{$p->kelas}}</td>
      <td>{{$p->tmtlhr}}</td>
      <td>{{$p->tgllhr}}</td>
      <td>{{$p->email}}</td>

  <td>
 
    <form action="{{route('hapus',$p->id)}}" method="post">
    @csrf
    @method('DELETE')
    <a href="/ubah/{{$p->id}}" class="btn btn-warning btn-sm">Ubah</a>
    <Button type="submit" class="btn btn-danger btn-sm">Hapus</button>
    </form>
</td>

    </tr>
    <! @endForeach >

  </tbody>
</table>
</div>

@endsection