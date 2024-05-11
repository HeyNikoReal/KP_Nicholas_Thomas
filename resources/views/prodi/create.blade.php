@extends('layout.main')
@section('title', 'Halaman Prodi')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Form Prodi</h4>
                <p class="card-description">
                  Isi Form Prodi
                </p>
                <form class="forms-sample" method="POST" action="{{route('prodi.store')}}">
                    @csrf
                  <div class="form-group">
                    <label for="exampleInputUsername1">Nama Prodi</label>
                    <input type="text" class="form-control" name= "nama" placeholder="Nama Prodi" value="{{old('nama')}}">
                    @error('nama')
                    <label for="nama" class="text-danger">{{$message}}</label>
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">Nama Fakultas</label>
                  <select name="fakultas_id" class="form-control">
                    @foreach ($fakultas as $item)
                        <option value="{{$item->id}}">{{$item->nama}}</option>
                    @endforeach
                  </select>
                  @error('fakultas_id')
                        <label for="nama" class="text-danger">{{$message}}</label>
                    @enderror
                </div>
                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  <a href="{{url('prodi')}}" class="btn btn-light">Cancel</a>
                </form>
              </div>
            </div>
          </div>
    </div>
    @endsection
