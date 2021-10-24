@extends('layout')
@section('page')
    Data Mahasiswa
@endsection

@section('judul')
    Data Mahasiswa
@endsection

@section('left')
<div id="content">
  <div id="left">
    <h2>Form Data Mahasiswa</h2>
    <form action="/simpan" method="POST">
      {{ csrf_field() }}
      Nama Mahasiswa : <input type="text" name="nama_mhs" > <br>
      NIM Mahasiswa : <input type="text" name="nim_mhs" ><br>
      Kelas : <input type="text" name="kls_mhs" ><br>
      Prodi : <input type="text" name="prodi_mhs" ><br>
      Fakultas : <input type="text" name="fakultas_mhs"><br>
      <input type="submit" value="Simpan">
    </form>
  </div>
  @endsection

@section('right')
<div id="right">
  <div class="box">
    <h2>Data Mahasiswa</h2>
    <table border="1">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Kelas</th>
        <th>Prodi</th>
        <th>Fakultas</th>
        <th>Opsi</th>
      </tr>
      @foreach ($data_mhs as $data)
        <tr>
          <th> {{ $data->id}} </th>
          <th> {{ $data->nama_mahasiswa }} </th>
          <th> {{ $data->nim_mahasiswa }} </th>
          <th> {{ $data->kelas_mahasiswa }} </th>
          <th> {{ $data->prodi_mahasiswa }} </th>
          <th> {{ $data->fakultas_mahasiswa }} </th>
          <td>
          <a href="/edit/{{ $data->id }}">Edit</a>
          <a href="/delete/{{ $data->id }}">Hapus</a>
          </td>

        </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection