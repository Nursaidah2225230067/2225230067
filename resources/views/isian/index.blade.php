@extends('layout.nur')
@section('kontent')
<h3>Daftar Kunjungan Perpustakaan FKIP UNTIRTA</h3>
<form method="POST" action="/isian">
    @csrf
    <div class="mb-3">
        <label for="Nama" class="form-label">Nama:</label>
        <input type="text" id="Nama" name="Nama" class="form-control" placeholder="Nama" value="{{Session::get('Nama')}}">
    </div>
    <div class="mb-3">
        <label for="Nim" class="form-label">Nim:</label>
        <input type="text" id="Nim" name="Nim" class="form-control" placeholder="Nim" value="{{Session::get('Nim')}}">
    </div>
    <div class="mb-3">
        <label for="Kelas" class="form-label">Kelas:</label>
        <input type="text" id="Kelas" name="Kelas" class="form-control" placeholder="Kelas" value="{{Session::get('Kelas')}}">
    </div>
    <div class="mb-3">
        <label for="Jurusan" class="form-label">Jurusan:</label>
        <input type="text" id="Jurusan" name="Jurusan" class="form-control" placeholder="Jurusan" value="{{Session::get('Jurusan')}}">
    </div>
    <div class="mb-3">
        <label for="Semester" class="form-label">Semester:</label>
        <input type="text" id="Semester" name="Semester" class="form-control" placeholder="Semester" value="{{Session::get('Semester')}}">
    </div>
    <div class="mb-3">
        <button>Submit</button>
    </div>
</form>
@endsection