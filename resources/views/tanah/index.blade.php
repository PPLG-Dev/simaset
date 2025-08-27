@extends('layouts.app')

@section('title', 'Data Tanah')

@section('content')
<div>
    <a href="{{ route('tanah.create') }}">Tambah</a>
</div>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Tanah</th>
            <th>Kode Tanah</th>
            <th>Luas</th>
            <th>No Sertifikat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama_tanah }}</td>
            <td>{{ $item->kode_tanah }}</td>
            <td>{{ $item->luas }}</td>
            <td>{{ $item->no_sertifikat }}</td>
            <td>
                <a href="{{ route('tanah.edit', $item->id) }}">Edit</a>
                <form action="{{ route('tanah.destroy', $item->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection