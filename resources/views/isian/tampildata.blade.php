@extends('layout.nur')
@section('kontent')
<h3 class="card-title text-center">Data Pengunjung Perpustakaan<br>FKIP UNTIRTA</br></h3>
<br><a href="/" class= "btn btn-primary">Tambah Data Pengunjung</a></br>
<p></p>
<table class=table border= "15" cellpadding= "25" cellspacing="0">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Nim</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Semester</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{$item->Nama}}</td>
            <td>{{$item->Nim}}</td>
            <td>{{$item->Kelas}}</td>
            <td>{{$item->Jurusan}}</td>
            <td>{{$item->Semester}}</td>
            <td>{{$item->Alamat}}</td>
            <td>
                <a class='btn btn-warning btn-sm' href="{{url('/isian/'.$item->Nama.'/edit')}}">Edit</a>
                <form onsubmit="return confirm('Apakah Yakin?')" class="d-inline" action="{{'/isian/'.$item->Nama}}" method="post"> @csrf @method('DELETE')
                <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection