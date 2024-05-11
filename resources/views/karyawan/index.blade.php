@extends('layout.main')

@section('title', 'Halaman Karyawan')

@section('content')

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Karyawan<h4>
                            <p class="card-description">
                                Daftar Karyawan
                            </p>
                            <a href="{{ route('karyawan.create') }}" type="button"
                                class="btn btn-primary btn-rounded btn-fw">Tambah</a>
                            @if (Session::get('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>Kode Karyawan</th>
                                            <th>Nama Karyawan</th>
                                            <th>Jabatan</th>
                                            <th>Alamat</th>
                                            <th>Nomor Telepon</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($karyawans as $item)
                                            <tr>
                                                <td>{{ $item->kode_karyawan }}</td>
                                                <td>{{ $item->nama_karyawan }}</td>
                                                <td>{{ $item->nama_jabatan }}</td>
                                                {{-- <td>Rp. {{ number_format($item->gaji_jabatan, 2, ',', '.') }}</td> --}}
                                                <td>{{ $item->alamat }}</td>
                                                <td>{{ $item->nomor_telepon }}</td>

                                                {{-- <td><img src="image/{{ $item->foto }}" alt=""></td> --}}
                                                {{-- <td>{{ $item->prodi['nama'] }}</td>
                                                <td>{{ $item->prodi->fakultas['nama'] }}</td> --}}
                                                {{-- {{ $item->fakultas->nama }} --}}
                                                <td>
                                                    <form method="POST"
                                                        action="{{ route('karyawan.destroy', $item->id) }}">
                                                        @csrf
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button type="submit"
                                                            class="btn btn-xs btn-danger btn-rounded hapus_karyawan"
                                                            data-toggle="tooltip" title='Delete'
                                                            data-nama='{{ $item->nama_karyawan }}'>Hapus</button>
                                                        <a href="{{ route('karyawan.edit', $item->id) }}"
                                                            class="btn btn-xs btn-primary btn-rounded">Ubah</a>
                                                        <a href="{{ route('karyawan.show', $item->id) }}"
                                                            class="btn btn-xs btn-warning btn-rounded">Detail</a>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                </div>
            </div>
        </div>
    </div>

@endsection
