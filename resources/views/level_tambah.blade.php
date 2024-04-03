@extends('layouts.app')

@section('subtitle', 'level')
@section('content_header_title', 'level')
@section('content')
    
        <div class="card-body">
            <forom method="post" action="tambah_simpan">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Level Kode</label>
                    <input type="text" class="form-control" name="level_nama" placeholder="Masukkan Kode Level">
                </div>
                <div class="form-group">
                    <label>Level Nama</label>
                    <input type="text" class="form-control" name="level_nama" placeholder="Masukkan Nama Level">
                </div>
                <div class="card-footer">
                    <a href="../level" class="btn btn-primary">Submit</a>
                </div>
            </form>
        </div>
    </div>
@endsection