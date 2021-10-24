@extends('layout')
@section('page')
    Edit
@endsection

@section('judul')
    Edit Data Mahasiswa
@endsection

@section('left')
<div id="content">
  <div id="left">
    <h2>Form Data Mahasiswa</h2>
    <form action="/update" method="POST">
      {{ csrf_field() }}
      <input type="hidden" name="id" value="{{ $editData->id }}"> <br>
      Nama Mahasiswa : <input type="text" name="nama_mhs" value="{{ $editData->nama_mahasiswa }}"> <br>
      NIM Mahasiswa : <input type="text" name="nim_mhs" value="{{ $editData->nim_mahasiswa }}"><br>
      Kelas : <input type="text" name="kls_mhs" value="{{ $editData->kelas_mahasiswa }}"><br>
      Prodi : <input type="text" name="prodi_mhs" value="{{ $editData->prodi_mahasiswa }}"><br>
      Fakultas : <input type="text" name="fakultas_mhs" value="{{ $editData->fakultas_mahasiswa }}"><br>
      <input type="submit" value="Simpan">
    </form>
  </div>
  @endsection