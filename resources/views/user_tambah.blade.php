<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Data User</title>
</head>
<body>
    <h1>Form Tambah Data User</h1>
    <form method="post" action="/user/tambah_simpan">

        {{ csrf_field() }}

        <label>Username</label>
        <input type="text" name="username" placeholder="Masukkan Username">
        <br>
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Masukkan Nama">
        <br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Masukkan Password">
        <br>
        <label>Level ID</label>
        <input type="number" name="level_id" placeholder="Masukkan ID level">
        <br><br>
        <input type="submit" class="btn btn-success" value="Simpan">

    </form>
</body>
</html>



@extends('layouts.app')
@section('subtitle', 'User')
@section('content_header_title', 'User')
@section('content')
    
        <div class="card-body">
            <forom method="post" action="tambah_simpan">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="Username" placeholder="Masukkan Username">
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="Nama" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="Password" placeholder="Masukkan Password">
                </div>
                <div class="card-footer">
                    <a href="../user" class="btn btn-primary">Submit</a>
                </div>
            </form>
        </div>
    </div>
@endsection