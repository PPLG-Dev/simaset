@extends('layouts.app')

@section('title', 'Data Tanah')

@section('content')
<div class="card m-4">
    <div class="card-header">
        <h2 class="card-title text-center">Data Tanah</h2>
    </div>
    <div class="card-body row">
        <div class="col my-2">
            <a href="{{ route('tanah.create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="text-center">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Tanah</th>
                        <th scope="col">Kode Tanah</th>
                        <th scope="col">Luas (m<sup>2</sup>)</th>
                        <th scope="col">No Sertifikat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                    <tr>
                        <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                        <td>{{ $item->nama_tanah }}</td>
                        <td>{{ $item->kode_tanah }}</td>
                        <td>{{ $item->luas }}</td>
                        <td>{{ $item->no_sertifikat }}</td>
                        <td class="d-flex gap-2 justify-content-center">
                            <a href="{{ route('tanah.edit', $item->id) }}" class="btn btn-success">Edit</a>
                            <form action="{{ route('tanah.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection