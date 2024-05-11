@extends('layout.main')
@section('title', 'Edit Karyawan')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ubah Karyawan</h4>
                    <br>
                    <form class="forms-sample" method="POST" action="{{ route('karyawan.update', $karyawan->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputUsername1">Email</label>
                            <input type="email" class="form-control" name= "email" placeholder="Email"
                                value="{{ $karyawan->email }}">
                            @error('email')
                                <label for="kode" class="text-danger">Email harus diisi</label>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Password</label>
                            <input type="password" class="form-control" name= "password" placeholder="Password"
                                value="{{ $karyawan->password }}">
                            @error('password')
                                <label for="kode" class="text-danger">Password harus diisi</label>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Kode Karyawan</label>
                            <input type="text" class="form-control" name= "kode_karyawan" placeholder="Kode Karyawan"
                                value="{{ $karyawan->kode_karyawan }}">
                            @error('kode_karyawan')
                                <label for="kode" class="text-danger">Kode Karyawan harus diisi</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputUsername1">Nama Karyawan</label>
                            <input type="text" class="form-control" name= "nama_karyawan" placeholder="Nama Karyawan"
                                value="{{ $karyawan->nama_karyawan }}">
                            @error('nama_karyawan')
                                <label for="kode" class="text-danger">Nama Karyawan harus diisi</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputUsername1">Nama Jabatan</label>
                            <select name="kode_jabatan" class="form-control">
                                @foreach ($jabatanOptions as $kodeJabatan => $namaJabatan)
                                    <option value="{{ $kodeJabatan }}" @if(old('kode_jabatan', $karyawan->kode_jabatan) == $kodeJabatan) selected @endif>
                                        {{ $namaJabatan }}
                                    </option>
                                @endforeach
                            </select>
                            @error('kode_jabatan')
                                <label for="nama" class="text-danger">Nama Jabatan harus dipilih</label>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputUsername1">Tempat Lahir</label>
                            <input type="text" class="form-control" name= "tempat_lahir" placeholder="Tempat Lahir"
                                value="{{ $karyawan->tempat_lahir }}">
                            @error('tempat_lahir')
                                <label for="kode" class="text-danger">Tempat Lahir harus diisi</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputUsername1">Tanggal Lahir</label>
                            <input type="date" class="form-control" name= "tanggal_lahir" placeholder="Tanggal Lahir"
                                value="{{ $karyawan->tanggal_lahir }}">
                            @error('tanggal_lahir')
                                <label for="kode" class="text-danger">Tanggal Lahir harus diisi</label>
                            @enderror
                        </div>

                        {{-- <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="laki-laki" name="jenis_kelamin" class="custom-control-input" value="Laki-laki" @if (old('jenis_kelamin', 'Laki-laki') == 'Laki-laki') checked @endif>
                                <label class="custom-control-label" for="laki-laki">Laki-laki</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="perempuan" name="jenis_kelamin" class="custom-control-input" value="Perempuan" @if (old('jenis_kelamin') == 'Perempuan') checked @endif>
                                <label class="custom-control-label" for="perempuan">Perempuan</label>
                            </div>
                            @error('jenis_kelamin')
                                <label for="jenis_kelamin" class="text-danger">Jenis Kelamin harus dipilih</label>
                            @enderror
                        </div> --}}

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="laki-laki" name="jenis_kelamin" class="custom-control-input"
                                    value="Laki-laki" @if (old('jenis_kelamin', $karyawan->jenis_kelamin ?? 'Laki-laki') == 'Laki-laki') checked @endif>
                                <label class="custom-control-label" for="laki-laki">Laki-laki</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="perempuan" name="jenis_kelamin" class="custom-control-input"
                                    value="Perempuan" @if (old('jenis_kelamin', $karyawan->jenis_kelamin ?? 'Laki-laki') == 'Perempuan') checked @endif>
                                <label class="custom-control-label" for="perempuan">Perempuan</label>
                            </div>
                            @error('jenis_kelamin')
                                <label for="jenis_kelamin" class="text-danger">Jenis Kelamin harus dipilih</label>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="exampleInputUsername1">Alamat</label>
                            <input type="text" class="form-control" name= "alamat" placeholder="Alamat"
                                value="{{ $karyawan->alamat }}">
                            @error('alamat')
                                <label for="alamat" class="text-danger">Alamat harus diisi</label>
                            @enderror
                        </div>

                        {{-- <div class="form-group">
                            <label for="exampleInputAgama">Agama</label>
                            <select class="form-control" name="agama">
                                <option value="Islam" @if (old('agama') == 'Islam') selected @endif>Islam</option>
                                <option value="Katolik" @if (old('agama') == 'Katolik') selected @endif>Katolik</option>
                                <option value="Kristen" @if (old('agama') == 'Kristen') selected @endif>Kristen</option>
                                <option value="Hindu" @if (old('agama') == 'Hindu') selected @endif>Hindu</option>
                                <option value="Buddha" @if (old('agama') == 'Buddha') selected @endif>Buddha</option>
                                <option value="Konghucu" @if (old('agama') == 'Konghucu') selected @endif>Konghucu</option>
                            </select>
                            @error('agama')
                                <label for="agama" class="text-danger">Agama harus dipilih</label>
                            @enderror
                        </div> --}}

                        <div class="form-group">
                            <label for="exampleInputAgama">Agama</label>
                            <select class="form-control" name="agama">
                                <option value="Islam" @if (old('agama', $karyawan->agama ?? '') == 'Islam') selected @endif>Islam</option>
                                <option value="Katolik" @if (old('agama', $karyawan->agama ?? '') == 'Katolik') selected @endif>Katolik</option>
                                <option value="Kristen" @if (old('agama', $karyawan->agama ?? '') == 'Kristen') selected @endif>Kristen</option>
                                <option value="Hindu" @if (old('agama', $karyawan->agama ?? '') == 'Hindu') selected @endif>Hindu</option>
                                <option value="Buddha" @if (old('agama', $karyawan->agama ?? '') == 'Buddha') selected @endif>Buddha</option>
                                <option value="Konghucu" @if (old('agama', $karyawan->agama ?? '') == 'Konghucu') selected @endif>Konghucu</option>
                            </select>
                            @error('agama')
                                <label for="agama" class="text-danger">Agama harus dipilih</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputUsername1">Nomor Telepon</label>
                            <input type="text" class="form-control" name= "nomor_telepon" placeholder="Nomor Telepon"
                                value="{{ $karyawan->nomor_telepon }}">
                            @error('alamat')
                                <label for="nomor_telepon" class="text-danger">Nomor Telepon harus diisi</label>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Ubah</button>
                        <a href="{{ url('prodi') }}" class="btn btn-light">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
