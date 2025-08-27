@extends('layouts.app')

@section('title', 'Tambah Data Tanah')

@section('content')
    <div class="card m-4">
        <div class="card-header">
            <h2 class="card-title text-center">Tambah Data</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('tanah.store') }}" method="post">
                @csrf
                <div class="mb-2">
                    <label for="inputNamaTanah" class="form-label">Nama Tanah</label>
                    <input type="text" name="nama_tanah" id="inputNamaTanah" value="{{ old('nama_tanah') }}"
                        class="form-control">
                </div>
                <div class="mb-2">
                    <label for="inputKodeTanah" class="form-label">Kode Tanah</label>
                    <input type="text" name="kode_tanah" id="inputKodeTanah" value="{{ old('kode_tanah') }}"
                        class="form-control">
                </div>
                <div class="mb-2">
                    <label for="inputLuasTanah" class="form-label">Luas</label>
                    <input type="text" name="luas" id="inputLuasTanah" value="{{ old('luas') }}" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="inputNoSertifikat" class="form-label">No Sertifikat</label>
                    <input type="text" name="no_sertifikat" id="inputNoSertifikat" value="{{ old('no_sertifikat') }}"
                        class="form-control">
                </div>
                <div class="mb-2">
                    <button type="submit" class="btn btn-success me-2">Submit</button>
                    <button type="reset" class="btn btn-outline-secondary me-2">Batal</button>
                </div>
            </form>
        </div>
    </div>
@endsection
