@extends('layout.main')
@section('title', 'Halaman Jabatan')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Jabatan</h4>
                    <p class="card-description">
                        Isi Form Jabatan
                    </p>
                    <form class="forms-sample" method="POST" action="{{ route('jabatan.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">Kode Jabatan</label>
                            <input type="text" class="form-control" name= "kode_jabatan" placeholder="Kode Jabatan"
                                value="{{ old('kode_jabatan') }}">
                            @error('kode_jabatan')
                                <label for="kode" class="text-danger">Kode Jabatan harus diisi</label>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Nama Jabatan</label>
                            <input type="text" class="form-control" name= "nama_jabatan" placeholder="Nama Jabatan"
                                value="{{ old('nama_jabatan') }}">
                            @error('nama_jabatan')
                                <label for="kode" class="text-danger">Nama Jabatan harus diisi</label>
                            @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary mr-2">Tambah</button>
                        <a href="{{ url('jabatan') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
