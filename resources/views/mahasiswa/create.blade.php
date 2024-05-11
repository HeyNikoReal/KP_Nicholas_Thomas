@extends('layout.main')
@section('title', 'Halaman Mahasiswa')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Form Mahasiswa</h4>
                <p class="card-description">
                  Isi Form Mahasiswa
                </p>
                <form class="forms-sample" method="POST" action="{{route('mahasiswa.store')}}" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group">
                    <label for="npm">Nomor Pokok Mahasiswa</label>
                    <input type="text" class="form-control" name= "npm" placeholder="Nomor Pokok Mahasiswa" value="{{old('npm')}}">
                    @error('npm')
                        <label for="npm" class="text-danger">{{$message}}</label>
                    @enderror
                    <label for="nama">Nama Mahasiswa</label>
                    <input type="text" class="form-control" name= "nama" placeholder="Nama Mahasiswa" value="{{old('nama')}}">
                    @error('nama')
                        <label for="nama" class="text-danger">{{$message}}</label>
                    @enderror
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" name= "tempat_lahir" placeholder="Tempat Lahir" value="{{old('tempat_lahir')}}">
                    @error('tempat_lahir')
                        <label for="tempat_lahir" class="text-danger">{{$message}}</label>
                    @enderror
                    <label for="npm">Tanggal Lahir</label>
                        <input type="date" class="form-control" name= "tanggal_lahir" placeholder="Tanggal Lahir" value="{{old('tanggal_lahir')}}">
                        @error('tanggal_lahir')
                            <label for="tanggal_lahir" class="text-danger">{{$message}}</label>
                        @enderror
                    <label for="foto">Foto</label>
                        <input type="file" class="form-control" name= "foto" placeholder="Foto" value="{{old('foto')}}" accept="image/png, image/jpeg, image/jpg">
                        @error('foto')
                         <label for="foto" class="text-danger">{{$message}}</label>
                        @enderror
                    <label for="prodi_id">Program Studi</label>
                    <select name="prodi_id" class="form-control">
                        @foreach ($prodi as $item)
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                        @endforeach
                      </select>
                  </div>

                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  <a href="{{url('mahasiswa')}}" class="btn btn-light">Cancel</a>
                </form>
              </div>
            </div>
          </div>
    </div>
    @endsection
