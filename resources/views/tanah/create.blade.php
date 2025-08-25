@extends('layouts.app')

@section('title', 'Tambah Data Tanah')

@section('content')
    <div>
        <a href="{{ route('tanah.index') }}">Kembali</a>
    </div>
    <form action="{{ route('tanah.store') }}" method="post">
        @csrf
        <div>
            <label for="inputNamaTanah">Nama Tanah</label>
            <input type="text" name="nama_tanah" id="inputNamaTanah" value="{{ old('nama_tanah') }}">
        </div>
        <div>
            <label for="inputKodeTanah">Kode Tanah</label>
            <input type="text" name="kode_tanah" id="inputKodeTanah" value="{{ old('kode_tanah') }}">
        </div>
        <div>
            <label for="inputLuasTanah">Luas</label>
            <input type="text" name="luas" id="inputLuasTanah" value="{{ old('luas') }}">
        </div>
        <div>
            <label for="inputNoSertifikat">No Sertifikat</label>
            <input type="text" name="no_sertifikat" id="inputNoSertifikat" value="{{ old('no_sertifikat') }}">
        </div>
        <div>
            <button type="submit">Submit</button>
            <button type="reset">Batal</button>
        </div>
    </form>
@endsection
