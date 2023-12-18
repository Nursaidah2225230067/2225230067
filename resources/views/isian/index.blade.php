@extends('layout.nur')
@section('kontent')
<!doctype html>
<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet">
  </head>
<body>
    <div class="global-container">
    <div class="card login-form">
        <div class="card-body">
            <h3 class="card-title text-center">Daftar Kunjungan Perpustakaan <br>FKIP UNTIRTA</h3></br>
        </div>
   
    <div class="card-text">
    <form method="POST" action="/isian">
        @csrf
        <div class="main-user-info">
        <div class="user-input-box">
           
            <input type="text" id="Nama" name="Nama" class="form-control" placeholder="Nama" value="{{Session::get('Nama')}}">
        </div>
        <div class="user-input-box">
            
            <input type="text" id="Nim" name="Nim" class="form-control" placeholder="Nim" value="{{Session::get('Nim')}}">
        </div>
        <div class="user-input-box">
           
            <input type="text" id="Kelas" name="Kelas" class="form-control" placeholder="Kelas" value="{{Session::get('Kelas')}}">
        </div>
        <div class="user-input-box">
           
            <input type="text" id="Jurusan" name="Jurusan" class="form-control" placeholder="Jurusan" value="{{Session::get('Jurusan')}}">
        </div>
        <div class="user-input-box">
           
            <input type="text" id="Semester" name="Semester" class="form-control" placeholder="Semester" value="{{Session::get('Semester')}}">
        </div>
        <div class="user-input-box">
            
            <input type="text" id="Alamat" name="Alamat" class="form-control" placeholder="Alamat" value="{{Session::get('Alamat')}}">
        </div>
            <br><button type="submit" class="btn btn-primary">Submit</button></br>
        </div>
    </form>
</body>
@endsection