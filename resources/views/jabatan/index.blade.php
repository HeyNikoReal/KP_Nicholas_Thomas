@extends('layout.main')

@section('title', 'Halaman Jabatan')

@section('content')

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Jabatan<h4>
                            <p class="card-description">
                                Daftar Jabatan
                            </p>
                            <a href="{{ route('jabatan.create') }}" type="button"
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
                                            <th>Kode Jabatan</th>
                                            <th>Nama Jabatan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jabatans as $item)
                                            <tr>
                                                <td>{{ $item->kode_jabatan }}</td>
                                                <td>{{ $item->nama_jabatan }}</td>
                                                <td>
                                                    <form method="POST" action="{{ route('jabatan.destroy', $item->id) }}">
                                                        @csrf
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button type="submit"
                                                            class="btn btn-xs btn-danger btn-rounded hapus_jabatan"
                                                            data-toggle="tooltip" title='Delete'
                                                            data-nama='{{ $item->nama_jabatan }}'>Hapus</button>
                                                        <a href="{{ route('jabatan.edit', $item->id) }}"
                                                            class="btn btn-xs btn-primary btn-rounded">Ubah</a>
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
