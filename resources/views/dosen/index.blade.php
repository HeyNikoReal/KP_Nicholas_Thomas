@extends('layout.main')
@section('title', 'List Dosen')
@section('content')

    <h1>List Dosen</h1>
    <table class="table table-striped table-hover">
        <tr>
            <th>Kode</th>
            <th>Nama</th>
        </tr>

    @foreach ($dosen as $item)
    <tr>
    <td>{{$item["kode"]}}</td>
    <td>{{$item["nama"]}}</td>
    </tr>
    @endforeach

</table>
@endsection

