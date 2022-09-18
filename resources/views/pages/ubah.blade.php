@extends('layouts.master')
@section('judul', 'halaman Ubah')
@section('judulhalaman', 'Halaman Ubah')
@section('tabelsuhu')

<form method="post" action="/perbaharui/{{$bioUbah->id}}">
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
     <input type="text" class="form-control" id="inputNama" placeholder="Nama Lengkap" name="nama" value="{{$bioUbah->nama}}">
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
      <input type="text" class="form-control" id="inputNis" placeholder="NIS" name="nis" value="{{$bioUbah->nis}}">
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
      <input type="text" class="form-control" id="inputKelas" placeholder="Kelas" name="kelas" value="{{$bioUbah->kelas}}">
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
      <input type="text" class="form-control" id="inputTempatLahir" placeholder="Tempat Lahir" name="tmtlhr" value="{{$bioUbah->tmtlhr}}">
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
    <input type="date" class="form-control" id="inputTanggalLahir" placeholder="Tanggal Lahir" name="tgllhr" value="{{$bioUbah->tgllhr}}">
      @if ($errors->has('tgllhr'))
        <div class ="class">
        {{$errors->first('tgllhr')}}
        </div>
        @endif
  </select>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
