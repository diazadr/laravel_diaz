@extends('layouts.master')
@section('judul', 'halaman Pengguna')
@section('judulhalaman', 'Ubah Data Pengguna')
@section('tabelsuhu')

<form method="post" action="/updateReg/{{$userEdit->id}}">
  {{csrf_field() }}
  @method('PUT')

  @if ($message = Session::get('sukses'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong style="font-size: 14px">{{ $message }}</strong>
      </div>
      @endif


    <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
     <input type="text" class="form-control" id="inputNama" placeholder="Nama Lengkap" name="name" value="{{$userEdit->name}}">
        @if ($errors->has('name'))
        <div class ="class">
        {{$errors->first('name')}}
        </div>
        @endif
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="email" value="{{$userEdit->email}}">
      @if ($errors->has('email'))
        <div class ="class">
        {{$errors->first('email')}}
        </div>
        @endif
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail" placeholder="Password" name="password" value="{{$userEdit->password}}">
      @if ($errors->has('password'))
        <div class ="class">
        {{$errors->first('password')}}
        </div>
        @endif
  </select>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
