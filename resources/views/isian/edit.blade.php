@extends('layout.nur')
@section('kontent')
    <div class="global-container">
    <div class="card login-form">
        <div class="card-body">
            <h3 class="card-title text-center">Edit Data Pengunjung</h3>
        </div>
<div class="card-text">
<form method="POST" action="{{'/isian/'.$data->Nama}}">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="Nama" class="form-label">Nama:</label>
        <input type="text" id="Nama" name="Nama" class="form-control" placeholder="Nama" value="{{Session::get('Nama')}}">
    </div>
    <div class="user-input-box">
        <label for="Nim" class="form-label">Nim:</label>
        <input type="text" id="Nim" name="Nim" class="form-control" placeholder="Nim" value="{{Session::get('Nim')}}">
    </div>
    <div class="user-input-box">
        <label for="Kelas" class="form-label">Kelas:</label>
        <input type="text" id="Kelas" name="Kelas" class="form-control" placeholder="Kelas" value="{{Session::get('Kelas')}}">
    </div>
    <div class="user-input-box">
        <label for="Jurusan" class="form-label">Jurusan:</label>
        <input type="text" id="Jurusan" name="Jurusan" class="form-control" placeholder="Jurusan" value="{{Session::get('Jurusan')}}">
    </div>
    <div class="user-input-box">
        <label for="Semester" class="form-label">Semester:</label>
        <input type="text" id="Semester" name="Semester" class="form-control" placeholder="Semester" value="{{Session::get('Semester')}}">
    </div>
    <div class="user-input-box">
        <label for="Alamat" class="form-label">Alamat:</label>
        <input type="text" id="Alamat" name="Alamat" class="form-control" placeholder="Alamat" value="{{Session::get('Alamat')}}">
    </div>
    <div class="d-grid">
        <button>Edit</button> <a class="btn btn-secondry" href="/isian">Kembali</a>
    </div>
</form>
@endsection