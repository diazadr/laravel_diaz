@extends('layouts.master')
@section('judul', 'tambah Biodata')
@section('judulhalaman', 'Tambah Biodata')
@section('tabelsuhu')

<form method="post" action="/simpanData">
  {{csrf_field() }}

  @if ($message = Session::get('sukses'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong style="font-size: 14px">{{ $message }}</strong>
      </div>
      @endif


    <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
     <input type="text" class="form-control" id="inputNama" placeholder="Nama Lengkap" name="nama">
        @if ($errors->has('nama'))
        <div class ="class">
        {{$errors->first('nama')}}
        </div>
        @endif
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">NIS</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputNis" placeholder="NIS" name="nis">
      @if ($errors->has('nis'))
        <div class ="class">
        {{$errors->first('nis')}}
        </div>
        @endif
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Kelas</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputKelas" placeholder="Kelas" name="kelas">
      @if ($errors->has('kelas'))
        <div class ="class">
        {{$errors->first('kelas')}}
        </div>
        @endif
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Tempat Lahir</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputTempatLahir" placeholder="Tempat Lahir" name="tmtlhr">
      @if ($errors->has('tmtlhr'))
        <div class ="class">
        {{$errors->first('tmtlhr')}}
        </div>
        @endif
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Lahir</label>
    <div class="col-sm-10">
    <input type="date" class="form-control" id="inputTanggalLahir" placeholder="Tanggal Lahir" name="tgllhr">
      @if ($errors->has('tgllhr'))
        <div class ="class">
        {{$errors->first('tgllhr')}}
        </div>
        @endif
  </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
     <input type="email" class="form-control" id="inputNama" placeholder="Email" name="email">
        @if ($errors->has('email'))
        <div class ="class">
        {{$errors->first('email')}}
        </div>
        @endif
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
